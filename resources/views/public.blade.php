<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('contentTitle', 'NOT_DEFINED') | {{ config('app.name', 'NOT_DEFINED') }}</title>
    @include('LaraAdminLTE.layouts.parts.meta')
    @include('LaraAdminLTE.layouts.parts.css')
</head>

@yield('content')

{{-- @include('LaraAdminLTE.layouts.parts.js') --}}

</body>
</html>
