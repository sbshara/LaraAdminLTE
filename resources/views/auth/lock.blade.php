@extends('LaraAdminLTE.public')

@section('content')

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <img src={{ asset('vendor/LaraAdminLTE/img/logo.png') }} height="100"><br>
            <a href="{{ route('home') }}">
                {!! config('LaraAdminLTE.name', '<b>Lara</b>Amin<i>LTE</i>') !!}
            </a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">{{ Auth::user()->fullName() }}</div>
        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="{{ Auth::user()->image() }}" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->
            <!-- lockscreen credentials (contains the form) -->
            <form action="{{ route('login') }}" method="POST" class="lockscreen-credentials">
                @csrf
                <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                <div class="input-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" placeholder="Password" required>
                    <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i>
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->
        </div>
        <!-- /.lockscreen-item -->
        @if ($errors->has('password'))
            <span class="help-block btn btn-block" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <a href="{{ route('login') }}">Or sign in as a different user</a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; {{ now()->year }} <a href="{{ config('app.url') }}">{{ config('app.name')}}</a>.<br>
            All rights reserved.
        </div>
    </div>
<!-- /.center -->

@endsection