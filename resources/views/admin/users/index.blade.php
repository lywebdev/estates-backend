@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
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
                                <h3 class="card-title">Пользователи</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($users)
                                    <table id="estates-table" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Имя</th>
                                            <th>Фамилия</th>
                                            <th>Отчество</th>
                                            <th>Email</th>
                                            <th>Роль</th>
                                            <th>Телефон</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <th>{{ $user->id }}</th>
                                                <th>{{ $user->name }}</th>
                                                <th>{{ $user->surname }}</th>
                                                <th>{{ $user->email }}</th>
                                                <th>{{ $user->patronymic }}</th>
                                                <th>{{ $user->role() }}</th>
                                                <th>{{ $user->phone }}</th>
                                                <th class="table__btns">
                                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-dark btn-flat mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
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
                                            <th>Имя</th>
                                            <th>Фамилия</th>
                                            <th>Отчество</th>
                                            <th>Email</th>
                                            <th>Роль</th>
                                            <th>Телефон</th>
                                            <th>Действия</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    <p>Нет пользователей</p>
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
