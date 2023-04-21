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
        $guests = file_get_contents("https://script.google.com/macros/s/$deployId/dev?guest=$guest");
        $result = json_decode($guests, true);
        
        if ($result) {
            return view('welcome', ['guest' => $result['guest']]);
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
