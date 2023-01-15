<!-- login.blade.php -->
@extends('layout')

@section('content')
    <div class="form-container">
        <form method="POST" action="#">
            @csrf
            <h2 class="text-center mb-4">Login</h2>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <a href="#" class="btn btn-secondary btn-block">Register</a>
            </div>
        </form>
    </div>
@endsection
