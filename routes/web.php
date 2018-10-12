<?php

Route::get('/','PagesController@root')->name('root');
Auth::routes();
Route::resource('users','UsersController',['only'=>['show','edit','update']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('topics/{topic}/{slug?}','TopicsController@show')->name('topics.show');
Route::resource('categories','CategoriesController',['only'=>['show']]);
Route::post('upload_image','TopicsController@uploadImage')->name('topics.upload_image');
Route::resource('replies', 'RepliesController', ['only' => [ 'store','destroy']]);
Route::resource('notifications','NotificationsController',['only'=>['index']]);