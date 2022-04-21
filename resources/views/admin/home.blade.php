@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ Breadcrumbs::render('admin.home') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{ Breadcrumbs::render('admin.home') }}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footer_scripts')
<!-- Sparkline -->
<script src="{{ asset('libs/admin/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('libs/admin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('libs/admin/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
@endsection
