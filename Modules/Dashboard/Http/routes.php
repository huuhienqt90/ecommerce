<?php

Route::group(['middleware' => ['web'], 'prefix' => 'dashboard', 'as' => 'dashboard.', 'namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('postLoginForm');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::group(['middleware' => 'auth.dashboard'], function()
    {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });
});

