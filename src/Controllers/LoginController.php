<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // Login Form (GET)
    public function form(){

        return view('cms::login', [
            'title' => 'Login Form'
        ]);
        
    }

    // Check Login form (POST)
    public function login(Request $request) {

        $credentials = $request->validate([

            'email' => 'required|email|exists:users,email',
            'password' => 'required',

        ]);

        // TODO: Check for either username or email

        if( ! Auth::attempt($credentials ) ) {

            return back()
                ->withErrors('You have entered invalid credentials')
                ->onlyInput('email');

        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        // Fixation
        $request->session()->regenerate();

        // Continue on your way
        return redirect()
            ->intended('/admin')
            ->with('sucess', 'You are now signed');

    }

    // Should only hit here on a POST
    public function logout(Request $request) {

        // https://laravel.com/docs/9.x/authentication#retrieving-the-authenticated-user
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success','You have been loggedout.');

    }
    
}