

@extends('layouts.app')

@section('title', 'Signup')
@section('content')
    <form action="/register" class="login-form" method="post">
        @csrf
        <p>Signup</p>
        <div class="input-groups">
            <input type="text" name="name" placeholder="Name" />
            <div class="icon-div"><i class="bi bi-person"></i></div>
        </div>
        <div class="input-groups">
            <input type="text" name="email" placeholder="Email" />
            <div class="icon-div"><i class="bi bi-envelope"></i></div>
        </div>
        <div class="input-groups">
            <input type="text" name="password" placeholder="Password" />
            <div class="icon-div"><i class="bi bi-lock"></i></div>
        </div>
        <button>Signup</button>
        <h3>Already have an account? <span><a href="/login">Login</a></span></h3>
    </form>
@endsection