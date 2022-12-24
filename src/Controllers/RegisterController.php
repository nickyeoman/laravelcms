<?php

namespace NickYeoman\laravelcms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{

    // Registration Form
    public function form(){

        return view('cms::registration', ['title' => 'Registration Form']);
        
    }

    // Should only hit here on a POST
    public function save(Request $request) {

        // TDOD: 419 and 404 pages
        $validData = $request->validate([
            'email'     => 'required|unique:users,email|email|max:255',
            'name'      => 'required|unique:users,name|min:3|max:255',
            'password'  => 'required|min:8|max:90|confirmed'
        ],[
            'email.required'     => 'Email is needed in order to confirm your account',
            'email.email'        => 'Please provide a valid email address.',
            'email.unique'       => 'Email is already in our system, forgot password or click the validation link sent.',
            'name.required'      => 'You must provide a Username of 3 characters or more',
            'name.min'           => 'Username must be 3 or more characters',
            'name.unique'        => 'Username is not available',
            'password.required'  => 'You need a password',
            'password.min'       => 'Passwords must be at least 8 characters',
            'password.confirmed' => 'Your passwords do not match'
        ]);

        // Has the  password
        $validData['password'] = Hash::make($request->password);
        
        // Save the user
        $user = \App\Models\User::create($validData);

        // TODO: Send Validate Email Address
        event(new Registered($user));
        
        // Send home
        return redirect()->to('/')->with('success','Your account has been created, check your inbox for a validation link.');
    }
    
}
