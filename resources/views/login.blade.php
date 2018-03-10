@extends('master')
@section('nav') @endsection
@section('content')
    <div class="container">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">BRN</h1>
                </div>
                <div class="col-xs-12 text-center">
                    <a  id="btn-login-fb" class="btn btn-block btn-social btn-facebook">
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>
                </div>
                <hr class="hr-line-dashed">
                <h3 class="text-center m-t-lg m-b-lg">OR</h3>
                <div class="col-xs-12">
                    <form id="login-form" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control" required name="email"  placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="password"  placeholder="Password">
                        </div>
                        <div class="form-group" data-error="message">
                            <p class="text-danger center error-content"></p>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                        <p class="text-muted text-center"><small>Do not have an account?</small></p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
                    </form>
                </div>
                <p class="m-t"> <small>Brand © 2017</small> </p>
            </div>
        </div>

    </div>
@stop
