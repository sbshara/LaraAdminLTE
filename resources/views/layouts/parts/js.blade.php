<!-- jQuery 3 -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button);</script>

<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('vendor/LaraAdminLTE/js/bootstrap.min.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ asset('vendor/LaraAdminLTE/js/raphael.min.js') }}"></script>
<script src="{{ asset('vendor/LaraAdminLTE/js/morris.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery.sparkline.min.js') }}"></script>

<!-- jvectormap -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('vendor/LaraAdminLTE/js/moment.min.js') }}"></script>
<script src="{{ asset('vendor/LaraAdminLTE/js/daterangepicker.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('vendor/LaraAdminLTE/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('vendor/LaraAdminLTE/js/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('vendor/LaraAdminLTE/js/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('vendor/LaraAdminLTE/js/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('vendor/LaraAdminLTE/js/adminlte.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('vendor/LaraAdminLTE/js/pages/dashboard.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendor/LaraAdminLTE/js/demo.js') }}"></script>

@yield('otherJS')

<!-- Your own JS File -->
<script src="{{ asset('js/app.js') }}"></script>