@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <form action="/login" method="post" class="login-form">
        <p>Login</p>
        @csrf
        <div class="input-groups">
            <input type="text" name="email" placeholder="Email" />
            <div class="icon-div"><i class="bi bi-envelope"></i></div>
        </div>
        <div class="input-groups">
            <div class="icon-div"><i class="bi bi-lock"></i></div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <a href="#"><div>Forgot Password</div></a>
        <button>Login</button>
        <h3>Don't have an account? <span><a href="/signup">Sign up</a></span></h3>
    </form>
@endsection