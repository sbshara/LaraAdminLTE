<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('contentTitle', 'NOT_DEFINED') | {{ config('app.name', 'NOT_DEFINED') }}</title>
    
    @include('LaraAdminLTE.layouts.parts.meta')
    @include('LaraAdminLTE.layouts.parts.css')

</head>
<body 
    class="hold-transition 
    @auth
        {{ Auth::user()->settings() }}
    @else
        skin-blue sidebar-mini
    @endauth
    ">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('LaraAdminLTE.shortName', '<b>A</b>LTE') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('LaraAdminLTE.name', 'LaraAdminLTE') !!}</span>
            </a>


