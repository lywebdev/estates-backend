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

                                    <h4 class="">Выберите тип недвижимости</h4>
                                    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               id="custom-content-above-home-tab"
                                               data-toggle="pill"
                                               href="#estate_{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
                                               role="tab"
                                               aria-controls="custom-content-above-home"
                                               aria-selected="true">Квартира</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               id="custom-content-above-home-tab"
                                               data-toggle="pill"
                                               href="#estate_{{ \App\Models\Estate\Estate::CATEGORIES['houses']['slug'] }}"
                                               role="tab"
                                               aria-controls="custom-content-above-home"
                                               aria-selected="true">Дом</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-above-tabContent">
                                        <div class="tab-pane fade show active pt-2"
                                             id="estate_{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
                                             data-estate-category="{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
                                             role="tabpanel"
                                             aria-labelledby="custom-content-above-home-tab">

                                            @include('admin.estates.sections.flat')

                                        </div>
                                        <div class="tab-pane fade show pt-2"
                                             id="estate_{{ \App\Models\Estate\Estate::CATEGORIES['houses']['slug'] }}"
                                             data-estate-type="{{ \App\Models\Estate\Estate::CATEGORIES['houses']['slug'] }}"
                                             role="tabpanel"
                                             aria-labelledby="custom-content-above-home-tab">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="house[facing]">Облицовка</label>
                                                        <input type="text" class="form-control" id="house[facing]" name="house[facing]" placeholder="Какая облицовка?">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="house[floors]">Этажность</label>
                                                        <input type="number" class="form-control" id="house[floors]" name="house[floors]" placeholder="Укажите этаж">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="house[year]">Год постройки</label>
                                                        <input type="number" class="form-control" id="house[year]" name="house[year]" placeholder="Год постройки?">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Материал стен</label>
                                                        <select class="form-control select2" style="width: 100%;" name="house[wall_material]">
                                                            <option selected value="-1">Не указано</option>
                                                            @foreach ($wallMaterials as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        </select>
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
