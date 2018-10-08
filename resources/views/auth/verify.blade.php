@extends('LaraAdminLTE.public')



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
            <p class="login-box-msg">VERIFY YOUR EMAIL ADDRESS</p>
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                <br>
                {{ __('If you did not receive the email') }}, 
                <a href="{{ route('verification.resend') }}">
                    {{ __('click here to request another') }}
                </a>.
            </div>
        </div>
    </div>
@endsection
