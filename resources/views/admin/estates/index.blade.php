@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Объекты недвижимости</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($estates)
                                <table id="estates-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <th>{{ $estate->id }}</th>
                                            <th>{{ $estate->name }}</th>
                                            <th>
                                                <a href="{{ route('admin.estates.edit', $estate->id) }}" class="btn btn-outline-dark btn-flat">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Действия</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                @else
                                    <p>Нет объектов недвижимости</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection


@section('footer_scripts')
<script>
    $("#estates-table").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        // "order": [[ 3, "desc" ]]
    }).buttons().container().appendTo('#estates-table__wrapper .col-md-6:eq(0)');
</script>
@endsection
