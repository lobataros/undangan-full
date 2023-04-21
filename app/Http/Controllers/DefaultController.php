<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class DefaultController extends Controller
{
    private function getInnerComment(string $id)
    {
        $data = Comment::select(['uuid', 'nama', 'hadir', 'komentar', 'created_at'])
            // ->where('user_id', 1)
            ->where('parent_id', $id)
            ->orderBy('id', 'DESC')
            ->get();

        foreach ($data as $key => $val) {
            $data[$key]->created_at = $val->created_at->diffForHumans();
            $data[$key]->nama = e($val->nama);
            $data[$key]->komentar = e($val->komentar);
            $data[$key]->comment = $this->getInnerComment($val->uuid);
        }

        return $data->toArray();
    }

    public function index(Request $request)
    {
        $deployId = env('DEPLOYMENT_ID');
        $guest = $request->query('tamu');

        try {
            $guests = file_get_contents("https://script.google.com/macros/s/$deployId/dev?guest=$guest");
            $result = json_decode($guests, true);
            $name = $result['guest']['name'];
            $id = $result['guest']['id'];

            if (!empty($result['guest'])) {
                return view('welcome', [
                    'guest' => $result['guest'],
                    'message' => "%F0%9F%A4%B5%E2%80%8D%E2%99%82%EF%B8%8F%F0%9F%91%B0%E2%80%8D%E2%99%80%EF%B8%8F%F0%9F%92%8C%0ABismillahirahmanirrahim+++.%0ADear%2C%20%2A$name%2A%0A%0ASalam%20hangat%20dari%20kami%2C%20Ira%20dan%20Dimas%21%20Kami%20sangat%20senang%20untuk%20membagikan%20kabar%20bahagia%20bahwa%20kami%20akan%20menikah%21%0A%0ASebagai%20teman%2C%20kami%20ingin%20mengajakmu%20untuk%20turut%20merayakan%20momen%20penting%20dalam%20hidup%20kami.%20Jadi%2C%20izinkan%20kami%20untuk%20mengirimkan%20undangan%20resmi%20kami%20melalui%20tautan%20ini%3A%0A%0A%F0%9F%94%97%20https%3A%2F%2Firadimas.herokuapp.com%2F%3Ftamu%3D$id%0A%0A_%2AAcara%20pernikahan%20kami%20akan%20diselenggarakan%20dengan%20sangat%20sederhana%2A_%2C%20tanpa%20pesta%20yang%20meriah%2C%20karena%20yang%20terpenting%20bagi%20kami%20adalah%20kehadiran%2C%20dan%20doa%20restu%20kalian%20semua.%20Meskipun%20begitu%2C%20kami%20ingin%20menjadikan%20momen%20ini%20spesial%20dengan%20_%2Amengadakan%20walimah%20kecil%20di%20kediaman%20kami%2A_.%20Kami%20akan%20sangat%20bahagia%20jika%20kamu%20bisa%20hadir%20dan%20berbagi%20kebahagiaan%20bersama.%0A%0ATerima%20kasih.%20Kami%20tunggu%20di%20hari%20spesial%20nanti%21%0A%0AWith%20love%2C%0A%2A~ID%2A"
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return view('welcome', ['guest' => [
            'id' => null,
            'name' => null,
        ]]);
    }

    /**
     * Display a listing of the resource.
     */
    public function getComments(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'next' => ['max:3'],
            'per' => ['max:3']
        ]);

        if ($valid->fails()) {
            return response()->json([
                'code' => 400,
                'data' => [],
                'error' => $valid->messages()
            ], 400);
        }

        // $valid->next = intval($valid->next);
        // $valid->per = intval($valid->per);

        $data = Comment::select(['uuid', 'nama', 'hadir', 'komentar', 'created_at'])
            // ->where('user_id', 1)
            ->whereNull('parent_id')
            ->orderBy('id', 'DESC')
            ->get();

        // if ($valid->next >= 0 && $valid->per > 0) {
        //     $data = $data->limit($valid->per)->offset($valid->next);
        // }

        foreach ($data as $key => $val) {
            $data[$key]->nama = e($val->nama);
            $data[$key]->komentar = e($val->komentar);
            $data[$key]->comment = $this->getInnerComment($val->uuid);
            $data[$key]->created_at = $val->created_at->diffForHumans();
        }

        return [
            'code' => 200,
            'data' => $data->toArray(),
            'error' => []
        ];
        return view('welcome');
    }

    public function all(Request $request)
    {
        if ($request->get('id', '') !== env('JWT_KEY')) {
            return response()->json([
                'code' => 401,
                'data' => [],
                'error' => ['unauthorized']
            ], 401);
        }

        $data = Comment::orderBy('id', 'DESC')->get();

        foreach ($data as $key => $val) {
            $data->{$key}->created_at = $val->created_at->diffForHumans();
            $data->{$key}->nama = e($val->nama);
            $data->{$key}->komentar = e($val->komentar);
        }

        return [
            'code' => 200,
            'data' => $data->toArray(),
            'error' => []
        ];
    }

    public function show(string $id)
    {
        $valid = Validator::make(
            [
                'id' => $id
            ],
            [
                'id' => ['required', 'max:37']
            ]
        );

        if ($valid->fails()) {
            return response()->json([
                'code' => 400,
                'data' => [],
                'error' => $valid->messages()
            ], 400);
        }

        $data = Comment::where('uuid', $id)
            // ->where('user_id', 1)
            ->limit(1)
            ->select(['nama', 'komentar', 'created_at'])
            ->first();

        if (!$data) {
            return response()->json([
                'code' => 404,
                'data' => [],
                'error' => ['not found']
            ], 404);
        }

        $data->created_at = $data->created_at->diffForHumans();
        $data->nama = e($data->nama);
        $data->komentar = e($data->komentar);

        return [
            'code' => 200,
            'data' => $data->toArray(),
            'error' => []
        ];
    }

    public function destroy(string $id, Request $request)
    {
        if ($request->get('id', '') !== env('JWT_KEY')) {
            return response()->json([
                'code' => 401,
                'data' => [],
                'error' => ['unauthorized']
            ], 401);
        }

        $data = Comment::where('uuid', $id)
            // ->where('user_id', context()->user->id)
            ->limit(1)
            ->first()
            ->fail();

        if (!$data) {
            return response()->json([
                'code' => 404,
                'data' => [],
                'error' => ['not found']
            ], 404);
        }

        $status = Comment::id($data->id)->delete();

        return [
            'code' => 200,
            'data' => [
                'status' => $status == 1
            ],
            'error' => []
        ];
    }

    public function create(Request $request)
    {
        $form = [
            ...$request->all(),
            'ip' => $request->ip(),
            'user_agent' => $request->server('HTTP_USER_AGENT')
        ];

        $valid = Validator::make(
            $form,            
            [
                'id' => 'max:37',
                'hadir' => 'bool',
                'nama' => 'required|max:50',
                'komentar' => 'required|max:500',
                'user_agent' => 'required',
                'ip' => 'max:50',
            ]
        );

        if ($valid->fails()) {
            return response()->json([
                'code' => 400,
                'data' => [],
                'error' => $valid->messages()
            ], 400);
        }

        $data = $form;
        $data['parent_id'] = empty($form['id']) ? null : $form['id'];
        $data['uuid'] = Uuid::uuid4()->toString();

        $guest = Guest::firstOrCreate([
            'id' => $form['guestId'],
            'nama' => $form['nama'],
            ...(!empty($form['hadir']) ? ['hadir' => $form['hadir']] : [])
        ]);

        $data = Comment::create([
            ...$data,
            'guest_id' => $guest->id
        ]);
        $data->created_at = $data->created_at->diffForHumans();
        $data->nama = e($data->nama);
        $data->komentar = e($data->komentar);

        return response()->json([
            'code' => 201,
            'data' => $data,
            'error' => []
        ], 201);
    }
}
