<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://bugachiev.com">Bugachiev.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('libs/admin/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('libs/admin/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('libs/admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('libs/admin/chart.js/Chart.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('libs/admin/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/admin/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('libs/admin/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('libs/admin/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('libs/admin/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('libs/admin/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('libs/admin/moment/moment.min.js') }}"></script>
<script src="{{ asset('libs/admin/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('libs/admin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('libs/admin/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('libs/admin/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="dist/js/demo.js"></script>--}}
<script src="{{ asset('js/admin/customize.js') }}"></script>

@yield('footer_scripts')
</body>
</html>
