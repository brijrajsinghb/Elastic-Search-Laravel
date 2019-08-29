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

use Illuminate\Support\Facades\Cache;

Route::get('/allarticles', function () {
    return view('articles.index', [
        'articles' => App\Article::all(),
    ]);
});

Route::get('/', function (\App\Articles\ArticlesRepository $repository) {
    if (request('q')) {
        $articles = $repository->search(request('q'));
    } else {
        $articles = \App\Article::all();
    }
    return view('articles.index', ['articles' => $articles]);
});

Route::get('/test', 'HomeController@index');

Route::get('/cache', function() {
    return Cache::get('key');
});