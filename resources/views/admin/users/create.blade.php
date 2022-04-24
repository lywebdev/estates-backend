@extends('admin.layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
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
                                <h3 class="card-title">Добавление пользователя</h3>
                            </div>

                            <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data" id="form" name="form">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Имя</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="name"
                                                    name="name"
                                                    placeholder="Введите имя пользователя">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="surname">Фамилиия</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="surname"
                                                    name="surname"
                                                    placeholder="Введите фамилию пользователя">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="patronymic">Отчество</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="patronymic"
                                                    name="patronymic"
                                                    placeholder="Введите отчество пользователя">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="role">Роль</label>
                                                <select class="form-control select2" style="width: 100%;" name="role">
                                                    <option selected value="{{ \App\Models\User::ROLES['user']['name'] }}">{{ \App\Models\User::ROLES['user']['rus'] }}</option>
                                                    <option value="{{ \App\Models\User::ROLES['candidat']['name'] }}">{{ \App\Models\User::ROLES['candidat']['rus'] }}</option>
                                                    <option value="{{ \App\Models\User::ROLES['agent']['name'] }}">{{ \App\Models\User::ROLES['agent']['rus'] }}</option>
                                                    <option value="{{ \App\Models\User::ROLES['moderator']['name'] }}">{{ \App\Models\User::ROLES['moderator']['rus'] }}</option>
                                                    <option value="{{ \App\Models\User::ROLES['admin']['name'] }}">{{ \App\Models\User::ROLES['admin']['rus'] }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tg_chat_id">ID телеграм чата</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="tg_chat_id"
                                                    name="tg_chat_id"
                                                    placeholder="ID телеграм чата">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="age">Возраст</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    id="age"
                                                    name="age"
                                                    placeholder="Укажите возраст">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phone">Номер телефона</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="phone"
                                                    name="phone"
                                                    placeholder="Номер телефона">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender">Пол</label>
                                                <select class="form-control select2" style="width: 100%;" name="gender">
                                                    <option selected value="-1">Не указан</option>
                                                    <option value="{{ \App\Models\User::GENDERS['man']['name'] }}">{{ \App\Models\User::GENDERS['man']['rus'] }}</option>
                                                    <option value="{{ \App\Models\User::GENDERS['woman']['name'] }}">{{ \App\Models\User::GENDERS['woman']['rus'] }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-mail пользователя</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="email"
                                                    name="email"
                                                    placeholder="Укажите email пользователя">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Пароль пользователя</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="password"
                                                    name="password"
                                                    placeholder="Укажите пароль пользователя">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="avatar">Загрузить аватар</label>
                                                <br>
                                                <input type="file" name="avatar" id="avatar">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" id="submitBtn" name="submitBtn" class="btn btn-primary">Добавить</button>
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
@endsection
