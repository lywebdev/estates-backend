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
                @if($errors->any())
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Ошибки
                                    </h3>
                                </div>

                                <div class="card-body">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5><i class="icon fas fa-ban"></i> Ошибка валидации</h5>
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление объекта недвижимости</h3>
                            </div>


                            <form action="{{ route('admin.estates.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    {{--                                    name / category--}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Название</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="name"
                                                       name="name"
                                                       placeholder="Введите название объекта недвижимости"
                                                       value="{{ $estate->name }}"
                                                >
                                            </div>
                                        </div>
                                        @isset($estatesCategories)
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Категория</label>
                                                    <select class="form-control select2" name="estate_category_id" style="width: 100%; height: 100%;">
                                                        @foreach ($estatesCategories as $category)
                                                            <option
                                                                value="{{ $category->id }}"
                                                                @if (isset($estate->category) && ($category->id == $estate->category->id))
                                                                    selected
                                                                @endif
                                                            >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endisset
                                    </div>
                                    {{--                                    район / адрес--}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="district">Район</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="district"
                                                       name="district"
                                                       placeholder="Укажите район"
                                                       value="{{ $estate->district }}"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">Адрес</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="location"
                                                       name="location"
                                                       placeholder="Укажите адрес"
                                                       value="{{ $estate->location }}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    площадь, жилая площадь, комнатность, облицовка, этаж, состояние --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="area">Площадь помещения</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="area"
                                                               name="area"
                                                               placeholder="Укажите площадь"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="living_area">Жилая площадь</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="living_area"
                                                               name="living_area"
                                                               placeholder="Укажите жилую площадь">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="room_size">Комнатность</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="room_size"
                                                               name="room_size"
                                                               placeholder="Укажите комнатность"
                                                               value="{{ $estate->room_size }}"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="facing">Облицовка</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="facing"
                                                               name="facing"
                                                               placeholder="Какая облицовка?"
                                                               value="{{ $estate->facing }}"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="floor">Этаж</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="floor"
                                                               name="floor"
                                                               placeholder="Укажите этаж"
                                                               value="{{ $estate->floor }}"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="condition">Состояние</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="condition"
                                                               name="condition"
                                                               placeholder="Каково состояние?"
                                                               value="{{ $estate->condition
 }}"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="year">Год постройки</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="year"
                                                       name="year"
                                                       placeholder="Год постройки?"
                                                       value="{{ $estate->year }}"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="wall_material">Материал стен</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="wall_material"
                                                       name="wall_material"
                                                       placeholder="Материал стен?"
                                                       value="{{ $estate->wall_material }}"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ceiling_height">Высота потолков</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="ceiling_height"
                                                       name="ceiling_height"
                                                       placeholder="Высота потолков?"
                                                       value="{{ $estate->ceiling_height }}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox"
                                                                   name="furniture"
                                                                   id="furniture"
                                                                   @if ($estate->furniture) checked @endif
                                                            >
                                                            <label for="furniture">Мебель</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox"
                                                                   name="parking"
                                                                   id="parking"
                                                                   @if ($estate->parking) checked @endif
                                                            >
                                                            <label for="parking">Парковка</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox"
                                                                   name="bathroom"
                                                                   id="bathroom"
                                                                   @if ($estate->bathroom) checked @endif
                                                            >
                                                            <label for="bathroom">Ванная</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox"
                                                                   name="sold"
                                                                   id="sold"
                                                                   @if ($estate->sold) checked @endif
                                                            >
                                                            <label for="sold">Продано</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    галерея --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="card-title">Работа с изображениями</h3>
                                            <br>
                                            @if ($estate->photos && $estate->photos->count() > 0)
                                                <div class="images-container ajaxed">
                                                    @foreach ($estate->photos as $key => $photo)
                                                        <div class="images-container__item"
                                                             data-route="{{ route('admin.api.estates-photos.destroy', $photo->id) }}"
                                                        >
                                                            <div class="images-container__item-img">
                                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}" alt="">
                                                            </div>
                                                            <div class="images-container__actions">
                                                                <div class="images-container__btn images-container__remove btn btn-block btn-secondary btn-flat">Удалить</div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <span>Нет изображений</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" id="submit" class="btn btn-primary">Сохранить</button>
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
    <script src="{{ asset('js/admin/customize.js') }}"></script>
@endsection
