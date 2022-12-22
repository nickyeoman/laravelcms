<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    // Login Form (GET)
    public function form(){

        return view('cms::login', ['title' => 'Login Form']);
        
    }

    // Check Login form (POST)
    public function login() {
        
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/admin');

    }

    // Should only hit here on a POST
    public function logout() {

        auth()->logout();
        
        return redirect()->to('/');

    }
    
}