<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    // Registration Form
    public function form(){

        return view('cms::registration', ['title' => 'Registration Form']);
        
    }

    // Should only hit here on a POST
    public function save() {

        $this->validate(request(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = \App\Models\User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        
        return redirect()->to('/admin');
    }
    
}
