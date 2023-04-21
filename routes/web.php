<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DefaultController::class, 'index']);
Route::prefix('/api/comment')->controller(DefaultController::class)->group(function () {
    Route::get('/all', 'all');

    Route::get('/', 'getComments');
    Route::post('/', 'create');
    Route::options('/');

    Route::get('/{id}', 'show');
    Route::delete('/{id}', 'destroy');
    Route::options('/{id}');
});
// Route::get('/comments', [DefaultController::class, 'getComments']);
