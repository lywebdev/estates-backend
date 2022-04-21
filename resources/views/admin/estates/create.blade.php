@extends('admin.layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/admin/select2/css/select2.min.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление объекта недвижимости</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
{{--                            {{ Breadcrumbs::render('admin.estates.create') }}--}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                @include('admin.components.alerts')

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление объекта недвижимости</h3>
                            </div>
                            <form action="{{ route('admin.estates.store') }}" method="post" enctype="multipart/form-data" id="form" name="form">
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="category" id="estate_category">

                                    @include('admin.estates.sections.common')

                                    @include('admin.estates.sections.estate-tabs')

                                    @include('admin.estates.sections.common-bottom')

                                </div>

                                <div class="card-footer">
                                    <button type="button" id="submitBtn" name="submitBtn" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection


@section('footer_scripts')
    <!-- dropzonejs -->
    <script src="{{ asset('libs/admin/dropzone/min/dropzone.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('libs/admin/select2/js/select2.full.min.js') }}"></script>
    <script>
        $("#estates-table").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            // "order": [[ 3, "desc" ]]
        }).buttons().container().appendTo('#estates-table__wrapper .col-md-6:eq(0)');

        $(document).ready(() => {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>

    <script src="{{ asset('js/admin/pages/estates.js') }}"></script>
@endsection
