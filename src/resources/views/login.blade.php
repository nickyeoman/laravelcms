@extends('cms::layouts.master')

@section('content')

<h1>Login form</h1>

<div class="formContainer">
    <form action="/login" method="post">
        {{ csrf_field() }}
        <div class="formGroup">
        <label for="login"><b>Your Username or Email</b></label>
        <input type="text" placeholder="Enter Username" name="login" value="{{ $login ?? "" }}" required>
        </div>
        <div class="formGroup">
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        <div class="formGroup">
        <button type="submit">Login</button>
        </div>
    </form>
    </div>
</div>
@endsection

