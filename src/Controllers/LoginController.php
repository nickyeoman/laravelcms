<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
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

        // TODO: throttle logings (see rate limiting)

        $credentials = $request->validate([

            'email' => [
                'required',
                'email',
                'exists:users,email'
            ],
            'password' => 'required',

        ]);

        // Try to login, if not fail, else proceed
        if( ! Auth::attempt($credentials ) ) {
            
            return back()
                ->withErrors('You have entered invalid credentials.')
                ->onlyInput('email');

        }
        
        // Check the the user is verified
        // TODO: do a resend notification email
        
        if( ! Auth::user()->hasVerifiedEmail() ) {

            Auth::logout();
            
            return back()
                ->withErrors('Your Email is not yet verified.')
                ->onlyInput('email');

        }

        // Session Fixation
        $request->session()->regenerate();

        // Continue on your way
        return redirect()
            ->intended('/admin')
            ->withSuccess('Success, you have logged in.');

    }

    // Should only hit here on a POST
    public function logout(Request $request) {

        // https://laravel.com/docs/9.x/authentication#retrieving-the-authenticated-user
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->withSuccess('Sucess, logged out.');

    }
    
}