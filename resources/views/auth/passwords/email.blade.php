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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
@endsection
