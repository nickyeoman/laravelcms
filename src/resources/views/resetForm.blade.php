@extends('cms::layouts.master')

@section('content')

<h1>Reset Password</h1>

{{-- TODO: make the links route alias' instead of static --}}

<div class="formContainer">
    <form action="/reset-password" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}" />

        <div class="formGroup">
            <label for="email"><b>Your Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" value="{{request()->get('email')}}" required>
        </div>

        <div class="formGroup">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="password_confirmation"><b>Password Confirm</b></label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
        </div>

        <div class="formGroup">
            <button type="submit">Set New Password</button>
        </div>

    </form>

    <div id="backtologin"><a href="/login">Login</a></div>

</div>

@endsection

