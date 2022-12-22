<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    // Entry Page
    public function index(){

        return view('cms::admin', ['title' => 'Admin Dashboard']);
        
    }

}
