@extends('LaraAdminLTE.public')

@section('otherCSS')
    <link rel="stylesheet" href="{{ asset('vendor/LaraAdminLTE/plugins/iCheck/square/blue.css') }}">
@endsection

@section('otherJS')
<!-- iCheck -->
<script src="{{ asset('vendor/LaraAdminLTE/plugins/iCheck/icheck.min.js') }}"></script>

<script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });
});
</script>
@endsection

@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src={{ asset('vendor/LaraAdminLTE/img/logo.png') }} height="100"><br>
            <a href="{{ route('home') }}">
                {!! config('LaraAdminLTE.name', '<b>Lara</b>Amin<i>LTE</i>') !!}
            </a>
        </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input 
                            id="email" type="email" name="email" 
                            class="form-control" 
                            placeholder="E-Mail Address" value="{{ old('email') }}" 
                            required autofocus
                        >
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="checkbox icheck btn btn-flat">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="form-group row">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Register a new membership') }}
                            </a>
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
@endsection
