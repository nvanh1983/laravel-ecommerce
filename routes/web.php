<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Page;
use App\Post;
use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    
    Page::withTrashed()->restore();
    
    // $page = Page::find(1);
    // $data['delete_page'] = $page->delete();
    $data['deleted_pages1'] = Page::onlyTrashed()->get();
    $data['deleted_pages2'] = Page::withTrashed()->get();
    
    $data['pages'] = Page::with(['types' => function($q) {
        $q->select('slug', 'name');
    }, 'author', 'editor', 'destroyer', 'publisher'])->get();
    
    $data['posts'] = Post::with(['types' => function($q) {
        $q->select('slug', 'name');
    }])->get();
    
    $data['products'] = Product::with([
        'types' => function($q) {
            $q->select('slug', 'name');
        },
        'sizes' => function($q) {
            $q->select('slug', 'name');
        }
    ])->get();
    
    return $data;
});