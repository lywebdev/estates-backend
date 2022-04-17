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
                            {{ Breadcrumbs::render('admin.estates.create') }}
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
                                    <input type="hidden" name="type" id="estate_type">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Название</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Введите название объекта недвижимости">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price">Стоимость</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="price"
                                                       name="price"
                                                       placeholder="Укажите стоимость"
                                                >
                                            </div>
                                        </div>
                                        @isset($estatesCategories)
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Категория</label>
                                                    <select class="form-control select2" name="estate_category" style="width: 100%; height: 100%;">
                                                        @foreach ($estatesCategories as $categoryName => $category)
                                                            <option value="{{ $categoryName }}">{{ $category['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endisset
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="location">Адрес</label>
                                                <input type="text" class="form-control" id="location" name="location" placeholder="Укажите адрес">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="area">Площадь</label>
                                                <input type="text" class="form-control" id="area" name="area" placeholder="Укажите площадь">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="condition">Состояние</label>
                                                <input type="text" class="form-control" id="condition" name="condition" placeholder="Каково состояние?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" name="parking" id="parking">
                                                            <label for="parking">Парковка</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" name="sold" id="sold">
                                                            <label for="sold">Продано</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="">Выберите тип недвижимости</h4>
                                    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               id="custom-content-above-home-tab"
                                               data-toggle="pill"
                                               href="#estate_{{ \App\Models\Estate\Estate::TYPES['flat'] }}"
                                               role="tab"
                                               aria-controls="custom-content-above-home"
                                               aria-selected="true">Квартира</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               id="custom-content-above-home-tab"
                                               data-toggle="pill"
                                               href="#estate_{{ \App\Models\Estate\Estate::TYPES['house'] }}"
                                               role="tab"
                                               aria-controls="custom-content-above-home"
                                               aria-selected="true">Дом</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-above-tabContent">
                                        <div class="tab-pane fade show active pt-2"
                                             id="estate_{{ \App\Models\Estate\Estate::TYPES['flat'] }}"
                                             data-estate-type="{{ \App\Models\Estate\Estate::TYPES['flat'] }}"
                                             role="tabpanel"
                                             aria-labelledby="custom-content-above-home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="flat[district]">Район</label>
                                                        <input type="text" class="form-control" id="flat[district]" name="flat[district]" placeholder="Укажите район">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="flat[living_area]">Жилая площадь</label>
                                                                <input type="text" class="form-control" id="flat[living_area]" name="flat[living_area]" placeholder="Укажите жилую площадь">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="flat[room_size]">Комнатность</label>
                                                                <input type="text" class="form-control" id="flat[room_size]" name="flat[room_size]" placeholder="Укажите комнатность">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="flat[facing]">Облицовка</label>
                                                                <input type="text" class="form-control" id="flat[facing]" name="flat[facing]" placeholder="Какая облицовка?">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="flat[floor]">Этаж</label>
                                                                <input type="text" class="form-control" id="flat[floor]" name="flat[floor]" placeholder="Укажите этаж">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="flat[year]">Год постройки</label>
                                                        <input type="text" class="form-control" id="flat[year]" name="flat[year]" placeholder="Год постройки?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="flat[wall_material]">Материал стен</label>
                                                        <input type="text" class="form-control" id="flat[wall_material]" name="flat[wall_material]" placeholder="Материал стен?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="flat[ceiling_height]">Высота потолков</label>
                                                        <input type="text" class="form-control" id="flat[ceiling_height]" name="flat[ceiling_height]" placeholder="Высота потолков?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="flat[floors]">Этажность</label>
                                                        <input type="text" class="form-control" id="flat[floors]" name="flat[floors]" placeholder="Укажите этаж">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="icheck-success d-inline">
                                                                    <input type="checkbox" name="furniture" id="furniture">
                                                                    <label for="furniture">Мебель</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="icheck-success d-inline">
                                                                    <input type="checkbox" name="bathroom" id="bathroom">
                                                                    <label for="bathroom">Ванная</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show pt-2"
                                             id="estate_{{ \App\Models\Estate\Estate::TYPES['house'] }}"
                                             data-estate-type="{{ \App\Models\Estate\Estate::TYPES['house'] }}"
                                             role="tabpanel"
                                             aria-labelledby="custom-content-above-home-tab">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="house[district]">Район</label>
                                                        <input type="text" class="form-control" id="house[district]" name="house[district]" placeholder="Укажите район">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="house[facing]">Облицовка</label>
                                                        <input type="text" class="form-control" id="house[facing]" name="house[facing]" placeholder="Какая облицовка?">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="house[floors]">Этажность</label>
                                                        <input type="text" class="form-control" id="house[floors]" name="house[floors]" placeholder="Укажите этаж">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="house[year]">Год постройки</label>
                                                        <input type="text" class="form-control" id="house[year]" name="house[year]" placeholder="Год постройки?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="house[wall_material]">Материал стен</label>
                                                        <input type="text" class="form-control" id="house[wall_material]" name="house[wall_material]" placeholder="Материал стен?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="house[ceiling_height]">Высота потолков</label>
                                                        <input type="text" class="form-control" id="house[ceiling_height]" name="house[ceiling_height]" placeholder="Высота потолков?">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="card-title">Прикрепление изображений</h3>
                                            <br>
                                            <div class="images-upload-zone">
                                                <div class="btns-container">
                                                    <div class="btn btn-block btn-outline-primary btn-flat btn-add-file">Добавить изображения</div>
                                                    <div class="btn btn-block btn-outline-primary btn-flat btn-remove-all">Удалить все</div>
                                                </div>
                                                <input type="file" name="files[]" multiple="multiple" id="files" style="display: none;">
                                                <input type="hidden" name="filesInJson" id="filesInJson">

                                                <div class="images-container">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
