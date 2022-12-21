<?php

Route::get('/admin', [Admin::class, 'index'])->name('cms_admin');

Route::get('/dashboard', function () {
    return view('cms::dashboard');
});