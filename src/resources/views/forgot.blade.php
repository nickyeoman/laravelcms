@extends('cms::layouts.master')

@section('content')

<h1>Reset Password</h1>

{{-- TODO: make the links route alias' instead of static --}}

@if ( session()->has('success'))
    <p>If your account exists, a password reset link was sent to {{ old('email') }}.</p>
@else
<div class="formContainer">
    <form action="/forgot" method="post">
        {{ csrf_field() }}
        <div class="formGroup">
            <label for="email"><b>Email Address</b></label>
            <input type="email" placeholder="Enter Username" name="email" value="{{ old('email') ?? "" }}" required>
        </div>
        
        <div class="formGroup">
            <button type="submit">Send Reset Link</button>
        </div>
    </form>
    <div id="backtologin"><a href="/login">Back to login</a></div>
    </div>
</div>
@endif

@endsection

