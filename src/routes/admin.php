<?php

Route::group(['middleware' => ['web']], function () {

    // Admin Interface
    Route::get('/admin', 
        'NickYeoman\laravelcms\Controllers\AdminController@index'
        )->name('cms_admin')
        ->middleware('auth')
    ;

    
});
// End laravelcms Routes admin.php