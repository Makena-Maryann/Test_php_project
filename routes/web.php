<?php


use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');

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

Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('/conversations', 'ConversationsController@index');
Route::get('/conversations/{conversation}', 'ConversationsController@show');
// Route::get('/conversations/{conversation}', 'ConversationsController@show')->middleware('can:view,conversation');

Route::post('/best-replies/{reply}', 'ConversationBestReplyController@store');