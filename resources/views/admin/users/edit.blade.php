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
                        <h1 class="m-0">Редактирование пользователя</h1>
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
                                <h3 class="card-title">Редактирование пользователя</h3>
                            </div>

                            <form action="{{ route('admin.users.update', $rowUser->id) }}" method="post" enctype="multipart/form-data" id="form" name="form">
                                @csrf
                                @method('PUT')
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
                                                    placeholder="Введите имя пользователя"
                                                    value="{{ $rowUser->name }}"
                                                >
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
                                                    placeholder="Введите фамилию пользователя"
                                                    value="{{ $rowUser->surname }}"
                                                >
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
                                                    placeholder="Введите отчество пользователя"
                                                    value="{{ $rowUser->patronymic }}"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="role">Роль</label>
                                                <select class="form-control select2" style="width: 100%;" name="role">
                                                    <option value="{{ \App\Models\User::ROLES['user']['name'] }}"
                                                        @if ($rowUser->role == \App\Models\User::ROLES['user']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::ROLES['user']['rus'] }}
                                                    </option>
                                                    <option value="{{ \App\Models\User::ROLES['candidat']['name'] }}"
                                                        @if ($rowUser->role == \App\Models\User::ROLES['candidat']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::ROLES['candidat']['rus'] }}
                                                    </option>
                                                    <option value="{{ \App\Models\User::ROLES['agent']['name'] }}"
                                                        @if ($rowUser->role == \App\Models\User::ROLES['agent']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::ROLES['agent']['rus'] }}
                                                    </option>
                                                    <option value="{{ \App\Models\User::ROLES['moderator']['name'] }}"
                                                        @if ($rowUser->role == \App\Models\User::ROLES['moderator']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::ROLES['moderator']['rus'] }}
                                                    </option>
                                                    <option value="{{ \App\Models\User::ROLES['admin']['name'] }}"
                                                        @if ($rowUser->role == \App\Models\User::ROLES['admin']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::ROLES['admin']['rus'] }}
                                                    </option>
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
                                                    placeholder="ID телеграм чата"
                                                    value="{{ $rowUser->tg_chat_id }}"
                                                >
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
                                                    placeholder="Укажите возраст"
                                                    value="{{ $rowUser->age }}"
                                                >
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
                                                    placeholder="Номер телефона"
                                                    value="{{ $rowUser->phone }}"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender">Пол</label>
                                                <select class="form-control select2" style="width: 100%;" name="gender">
                                                    <option selected value="-1">Не указан</option>
                                                    <option value="{{ \App\Models\User::GENDERS['man']['name'] }}"
                                                        @if ($rowUser->gender == \App\Models\User::GENDERS['man']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::GENDERS['man']['rus'] }}
                                                    </option>
                                                    <option value="{{ \App\Models\User::GENDERS['woman']['name'] }}"
                                                        @if ($rowUser->gender == \App\Models\User::GENDERS['woman']['name'])
                                                            selected
                                                        @endif
                                                    >
                                                        {{ \App\Models\User::GENDERS['woman']['rus'] }}
                                                    </option>
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
                                                    placeholder="Укажите email пользователя"
                                                    readonly
                                                    value="{{ $rowUser->email }}"
                                                >
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
                                                    placeholder="Не можем знать"
                                                    disabled
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" id="submitBtn" name="submitBtn" class="btn btn-primary">Сохранить</button>
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
