@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Объекты недвижимости</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">
{{--                            {{ Breadcrumbs::render('admin.estates.index') }}--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
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
                                        <th>Имя собственника</th>
                                        <th>Телефон собственника</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <th>{{ $estate->id }}</th>
                                            <th>{{ $estate->name ? $estate->name : 'Не указано' }}</th>
                                            <th>{{ $estate->owner_name ? $estate->owner_name : 'Не указано' }}</th>
                                            <th>{{ $estate->owner_phone ? $estate->owner_phone : 'Не указан' }}</th>
                                            <th class="table__btns">
                                                <a href="{{ route('admin.estates.edit', $estate->id) }}" class="btn btn-outline-dark btn-flat mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.estates.destroy', $estate->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-danger btn-flat">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Имя собственника</th>
                                        <th>Телефон собственника</th>
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
