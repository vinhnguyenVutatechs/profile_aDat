<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@getIndex')->name('Index');
Route::post('/contact', 'IndexController@postContact')->name('Contact');

Route::get('/login', 'IndexController@getLogin')->name('Login');
Route::post('/login', 'IndexController@postLogin');



Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'AdminController@Index');
    Route::get('/logout', 'AdminController@getLogout')->name('Logout');

    Route::group(['prefix' => 'settings'], function(){
        Route::get('/{slug}', 'MailController@getSettings')->name('Mail');
        Route::post('/eidt/{slug}', 'MailController@postEditSetting')->name('PostEdit');
    });

    Route::group(['prefix' => 'mail'], function(){
        Route::get('/{slug}', 'MailController@getMail')->name('Email');
        Route::get('/eidt/{id}', 'MailController@getEditMail')->name('mail.status');
        Route::get('/delete/{id}', 'MailController@getDeleteMail')->name('mail.delete');
    });

    Route::group(['prefix' => 'danh-muc'], function(){
        Route::get('/', 'CategoriesController@getCategories')->name('Mail');
        Route::post('/eidt/{id}', 'CategoriesController@postEditCategories')->name('categories.edit');
        Route::post('/add', 'CategoriesController@postAddCategories')->name('categories.add');
        Route::post('/eidt/categoriess/{id}', 'CategoriesController@postEditCategoriess')->name('categoriess.edit');

    });
});








// Route::get('/blog', 'IndexController@getBlog')->name('Blog');
// Route::post('/blog', 'IndexController@postBlog');
// Route::post('/dangky', 'IndexController@postdangky')->name('Dangky');


