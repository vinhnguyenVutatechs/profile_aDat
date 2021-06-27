<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@getIndex')->name('Index');



Route::get('/blog', 'IndexController@getBlog')->name('Blog');
Route::post('/blog', 'IndexController@postBlog');


