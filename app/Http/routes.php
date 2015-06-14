<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    $articles = \App\Article::sorted()->get();
    return View::make('articles', array('articles' => $articles));
});

Route::get('/grouped', function () {
    $firstArticles = \App\GroupedArticle::where('category', 'first')->sorted()->get();
    $secondArticles = \App\GroupedArticle::where('category', 'second')->sorted()->get();
    return View::make('grouped_articles', array('firstArticles' => $firstArticles, 'secondArticles' => $secondArticles));
});

Route::get('/posts', function () {
    $posts = \App\Post::all();
    return View::make('posts', array('posts' => $posts));
});


Route::post('sort', '\Rutorika\Sortable\SortableController@sort');
