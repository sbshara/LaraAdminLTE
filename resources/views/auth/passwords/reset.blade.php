@extends('LaraAdminLTE.public')

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
                <p class="login-box-msg">{{ __('Reset Password') }}</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{ $email ?? old('email') }}" required autofocus>
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
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
@endsection
