<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', [MoviesController::class, 'status_rating']);

Route::delete('/movies/{id}', [MoviesController::class, 'delete']);

Route::post('/movies',[MoviesController::class, 'store']);

Route::get('/test', function (){
    return Movie::all();
});


