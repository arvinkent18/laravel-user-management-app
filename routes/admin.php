<?php
Route::group(['prefix'  =>  'admin'], function () {
    Route::get('login', 'Admin\LoginController@index')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    // Only if login
    Route::group(['middleware' => ['auth:admin']], function () {    
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    });
});