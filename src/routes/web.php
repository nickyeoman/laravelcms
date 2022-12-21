<?php

Route::get(
    '/admin', 
    'NickYeoman\laravelcms\Controllers\AdminController@index'
)->name('cms_admin');

