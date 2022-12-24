<?php

namespace NickYeoman\laravelcms\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    // Entry Page
    public function index(){

        //TODO: document how to enable verification email and forgot password
        return view('cms::admin', ['title' => 'Admin Dashboard']);
        
    }

}
