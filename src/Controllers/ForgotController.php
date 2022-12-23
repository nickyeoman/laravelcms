<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;

class ForgotController extends Controller
{

    // Forgot Form (GET) collect username
    public function form(){

        return view('cms::forgot', [
            'title' => 'Reset Password Form'
        ]);
        
    }

    // Check Login form (POST)
    public function reset(Request $request) {

        // Check email exists
        $request->validate(['email' => 'required|email',]);

        // send email & Set database
        // FYI: To clean up the db, run: php artisan auth:clear-resets
        // TODO: Fix the email template form design
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Continue on your way
        return $status === Password::RESET_LINK_SENT ? 
            back()->withSuccess( __($status) )
            : 
            back()->withErrors(['email' => __($status)])
        ;

    }

    // Forgot Form (GET) collect username
    public function resetform($token){

        return view('cms::resetForm', [
            'title' => 'Reset Password Form',
            'token' => $token
        ]);
        
    }

    // POST only
    public function changePassword(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(

            $request->only('email', 'password', 'password_confirmation', 'token'),

            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET ? 
            redirect()->route('login')->withSuccess(__($status))
            : 
            back()->withErrors(['email' => [__($status)]])
        ;
        
    }


    
}