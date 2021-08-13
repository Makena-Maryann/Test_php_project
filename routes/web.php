<?php

use Illuminate\Support\Facades\Route;

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
//Order matters. The routes with wildcards {} take precedence.

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');

Route::get('/', function () {
      $container = new \App\Container();

      $container->bind('example', function (){
           return new \App\Example();
      });

      $example = $container->resolve('example');

      $example->go();

});

