@extends('cms::layouts.master')

@section('content')

<div class="formContainer">
    <h1>Registration Page</h1>

    <form action="/signup" method="post" id="cms-user-register-form" >
    {{ csrf_field() }}

    <div class="formGroup">
        <label for="email"><b>Your Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') ?? "" }}" required>
    </div>

    <div class="formGroup">
        <label for="name"><b>Username</b></label>
        <input type="text" placeholder="Enter A Username" name="name" value="{{ old('name') ?? "" }}" required>
    </div>

    <div class="formGroup">
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password_confirmation"><b>Password Confirm</b></label>
        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
    </div>

    <div class="info">
        <p>You will receive an email confirmation with a verification link  you will have to activate before your account becomes active.</p>
    </div>
    <div class="formGroup">
        <button type="submit">Sign Up</button>
    </div>
    </form>
</div>

@endsection

