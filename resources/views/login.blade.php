@extends('layouts.master')
@section('title','Home')
@section('content')

<section id="form">
    <!--form-->
    <div class="container">
        @if ($errors->all())
        <div class="row">
            <div class="alert alert-danger col-sm-9 col-sm-offset-1" role="alert">
                <h4 class="alert-heading">Errors:</h4>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Login to your account</h2>
                    <form action="login" method="POST">
                        @if (session('errorMsg'))
                        <div class="alert alert-danger" role="alert">
                            <strong> {{ session('errorMsg') }} </strong>
                        </div>
                        @endif
                        @csrf
                        <input type="text" name="email" placeholder="Email Address" />
                        <input type="password" name="password" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox" name="remember">
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <input name="name" type="text" placeholder="Name" />
                        <input name="email" type="email" placeholder="Email Address" />
                        <input name="password" type="password" placeholder="Password" />
                        <input name="password_confirmation" type="password" placeholder="Password Confirmation" />
                        <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

@endsection