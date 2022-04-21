@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Договора</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">
{{--                            {{ Breadcrumbs::render('admin.estates.index') }}--}}
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
                                <h3 class="card-title">Договора</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 1000px;">
                                @if ($agreements)
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Тип</th>
                                            <th>Под-тип</th>
                                            <th>Дата заключения</th>
                                            <th>Время заключения</th>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Отчество</th>
                                            <th>ИИН</th>
                                            <th>Адрес объекта</th>
                                            <th>Дата окончания договора</th>
                                            <th>Адрес прописки</th>
                                            <th>Сумма комиссии</th>
                                            <th>Мобильный номер</th>
                                            <th>Адрес проживания</th>
                                            {{--                                            <th>Третьи лица</th>--}}
                                            {{--                                            <th>Похожие объекты</th>--}}
                                            {{--                                            <th>Пакет</th>--}}
                                            {{--                                            <th>СМС-код</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($agreements as $agreement)
                                            <tr>
                                                <th>{{ $agreement->id }}</th>
                                                <th>{{ $agreement->type }}</th>
                                                <th>{{ $agreement->subtype }}</th>
                                                <th>{{ $agreement->date }}</th>
                                                <th>{{ $agreement->time }}</th>
                                                <th>{{ $agreement->surname }}</th>
                                                <th>{{ $agreement->name }}</th>
                                                <th>{{ $agreement->patronymic }}</th>
                                                <th>{{ $agreement->iin }}</th>
                                                <th>{{ $agreement->estate_address }}</th>
                                                <th>{{ $agreement->agreement_end_date }}</th>
                                                <th>{{ $agreement->rehistration_address }}</th>
                                                <th>{{ $agreement->commission }}</th>
                                                <th>{{ $agreement->phone }}</th>
                                                <th>{{ $agreement->living_address }}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
