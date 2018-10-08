<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b>
        @yield('version', 'v1.0.0')
    </div>
    <strong>
        Copyright &copy; {{ now()->year }} 
        <a href="{{ config('app.url') }}">
            {{ config('app.name')}}
        </a>.
    </strong> All rights reserved.
</footer>