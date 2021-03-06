<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => 'auth:api'], function() {

    Route::get('users', function() {
        return App\User::paginate(1000);
    });
    
    Route::get('pages', function() {
        return App\Page::paginate(1000);
    });
    
    Route::get('posts', function() {
        return App\Post::paginate(1000);
    });
    
    Route::get('products', function() {
        return App\Product::paginate(1000);
    });
    
});

