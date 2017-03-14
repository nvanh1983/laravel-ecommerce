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


Route::get('users', function() {
    return App\User::paginate(10);
});

Route::get('pages', function() {
    return App\Page::with([
        'author' => function ($q) {
            $q->select('id', 'name');
        },
        'types' => function ($q) {
            $q->select('id', 'name', 'slug');
        }
    ])->paginate(10);
});

Route::get('posts', function () {
    return App\Post::with([
        'publisher' => function ($q) {
            $q->select('id', 'name');
        },
        'types' => function ($q) {
            $q->select('id', 'name', 'slug');
        }
    ])->paginate(10);
});

Route::get('products', function() {
    return App\Product::with([
        'author' => function ($q) {
            $q->select('id', 'name');
        },
        'types' => function ($q) {
            $q->select('id', 'name', 'slug');
        }
    ])->paginate(10);
});