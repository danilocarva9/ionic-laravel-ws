@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3 text-center">
    <h2 class="text-white">Login</h2>

    <div class="separator separator-danger">✻</div>

    <p class="description">Make sure you entered the right information.</p>
    <div class="form-group">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label><h4 class="text-gray">Your email</h4></label>
            <input id="email" placeholder="danielcraig@gmail.com" type="email" class="form-control form-control-plain" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
           <label><h4 class="text-gray">Your password</h4></label>
            <input id="password" placeholder="Password" type="password" class="form-control form-control-plain" name="password" required>
            @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            </div>


            <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
            <div class="checkbox">
            <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
            </div>
            </div>
            </div>


                <div class="footer">

                <button class="btn btn-success btn-round btn-fill btn-wd">
                Sign In
                </button>
                </div>


    </form>
    </div>
                       <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
    <p class="text-gray info">Don't have an account? <a href="signup.html">Sign up</a></p>
    </div>



@endsection
