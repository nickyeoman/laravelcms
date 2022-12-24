@extends('cms::layouts.master')

@section('content')

<h1>Login form</h1>

{{-- TODO: make the links route alias' instead of static --}}

<div class="formContainer">
    <form action="/login" method="post">
        {{ csrf_field() }}
        <div class="formGroup">
        <label for="email"><b>Your Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') ?? "" }}" required>
        </div>
        <div class="formGroup">
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        <div class="formGroup">
        <button type="submit">Login</button>
        </div>
    </form>
    <div id="forgotpassword"><a href="/forgot">Forgot Password</a></div>
    </div>
</div>
@endsection

