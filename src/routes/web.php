<?php

Route::group(['middleware' => ['web']], function () {

    // Registration Form
    Route::get('/signup', 
        'NickYeoman\laravelcms\Controllers\RegisterController@form'
        )->name('cms_register')
        ->middleware('guest')
    ;

    Route::post('/signup', 
        'NickYeoman\laravelcms\Controllers\RegisterController@save'
    );

    //redirects
    Route::get('/register', function() {return to_route('cms_register');});
    Route::get('/registration', function() {return to_route('cms_register');});

    // Login
    Route::get('/login', 
        'NickYeoman\laravelcms\Controllers\LoginController@form'
        )->name('login')
        ->middleware('guest')
    ;

    Route::post('/login', 
        'NickYeoman\laravelcms\Controllers\LoginController@login'
    );

    // Forgot
    Route::get('/forgot', 
        'NickYeoman\laravelcms\Controllers\ForgotController@form'
        )->name('cms_forgot')
        ->middleware('guest')
    ;
    Route::post('/forgot', 
        'NickYeoman\laravelcms\Controllers\ForgotController@reset'
    );

    // Reset the password from the link
    Route::get('/reset/{token}', 
        'NickYeoman\laravelcms\Controllers\ForgotController@resetform'
        )->name('password.reset') // needs to be this for laravel's default
        ->middleware('guest')
    ;
    Route::post('/reset-password',
        'NickYeoman\laravelcms\Controllers\ForgotController@changePassword'
    );

    // Logout
    Route::get('/logout', 
        'NickYeoman\laravelcms\Controllers\LoginController@logout'
        )->name('cms_logout')
    ;

});
// End laravelcms Routes web.php
