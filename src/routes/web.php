<?php

Route::get('/admin', 
    'NickYeoman\laravelcms\Controllers\AdminController@index'
)->name('cms_admin')->middleware('auth');


/***************************************************************************************
 * User Authentication
 *************************************************************************************/

// Start Registration
// TODO: redirect if loggedin 
// TODO: error messages on fail
Route::get('/signup', 
    'NickYeoman\laravelcms\Controllers\RegisterController@form'
)->name('cms_register');

Route::post('/signup', 
    'NickYeoman\laravelcms\Controllers\RegisterController@save'
);

// Login
Route::get('/login', 
    'NickYeoman\laravelcms\Controllers\LoginController@form'
)->name('login');

Route::post('/login', 
    'NickYeoman\laravelcms\Controllers\LoginController@login'
);

// Logout
Route::get('/logout', 
    'NickYeoman\laravelcms\Controllers\LoginController@logout'
)->name('cms_logout');