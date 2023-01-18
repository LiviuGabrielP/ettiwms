@extends('loginlayout')

@section('content')
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input class="form-control" type="text" name="txt" placeholder="User name" required="" value="{{ old('txt') }}">
                    <input class="form-control" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}">
                    <input class="form-control" type="password" name="pswd" placeholder="Password" required="">
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </form>
            </div>
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="chk" aria-hidden="true">Login</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}">
                    <input class="form-control" type="password" name="pswd" placeholder="Password" required="">
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
    </div>
@endsection
