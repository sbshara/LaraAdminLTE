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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <img src={{ asset('vendor/LaraAdminLTE/img/logo.png') }} height="100"><br>
            <a href="{{ route('home') }}">
                {!! config('LaraAdminLTE.name', '<b>Lara</b>Amin<i>LTE</i>') !!}
            </a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>
            <form action="{{ route('register') }}" method="POST" class="">
                @csrf
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    @if($errors->has('name'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" placeholder="Full name" name="name" id="name" value="{{ old('name') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    @if($errors->has('email'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    @if($errors->has('password'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" id="password-confirm" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                </div>
            </form>
            <a href="{{ route('login') }}" class="text-center">
                I'm alread a member
            </a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    
@endsection