<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//posts
route::get('/posts',[PostController::class,'index']);
route::post('/post',[PostController::class,'store']);
route::get('/posts/{id}',[PostController::class,'show']);
route::put('/posts/{id}',[PostController::class,'update']);
route::delete('/posts/{id}',[PostController::class,'destroy']);
