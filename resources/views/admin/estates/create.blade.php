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
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление объекта недвижимости</h3>
                            </div>


                            <form action="{{ route('admin.estates.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Введите название объекта недвижимости">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="district">Район</label>
                                                <input type="text" class="form-control" id="district" name="district" placeholder="Укажите район">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Адрес</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Укажите адрес">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <style>
                                                .image-upload-dropzone {
                                                    width: 250px;
                                                    height: 150px;
                                                    border: 2px solid #ccc;
                                                }

                                                .image-upload-dropzone img {
                                                    max-width: 100%;
                                                    max-height: 100%;
                                                    object-fit: cover;
                                                }
                                            </style>

                                            <label for="files">Добавить изображение</label>
                                            <input type="file" name="files[]" id="files" multiple="multiple" style="display: none;">

                                            dropzone container:
                                            <div class="image-upload-dropzone">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" id="submit" class="btn btn-primary">Добавить</button>
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
    <script>
        $("#estates-table").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            // "order": [[ 3, "desc" ]]
        }).buttons().container().appendTo('#estates-table__wrapper .col-md-6:eq(0)');


        // Dropzone
        let dropzoneContainer = document.querySelectorAll('.image-upload-dropzone');

        dropzoneContainer.forEach((el, index) => {
            let dropzone = dropzoneContainer[index];
            let dropzoneInput = dropzone.querySelector('.dropzoneInput');
            const inputMultiple = false;

            ['drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop'].forEach( function(event) {
                dropzone.addEventListener(event, function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                });

                dropzone.addEventListener('dragover', (e) => {
                    dropzone.classList.add('dropzone-dragging');
                }, false);
                dropzone.addEventListener('dragleave', (e) => {
                    dropzone.classList.remove('dropzone-dragging');
                }, false);
                dropzone.addEventListener('click', function(e) {
                    dropzoneInput.click();
                });

                dropzone.addEventListener('drop', (e) => {
                    dropzone.classList.remove('dropzone-dragging');
                    let files = e.dataTransfer.files;
                    let dataTransfer = new DataTransfer();

                    if (!inputMultiple) {
                        let file = files[0];
                        dataTransfer.items.add(file);

                        let reader = new FileReader();

                        reader.onload = function (e) {
                            let img = dropzone.querySelector('img');
                            if (img && img.length !== 0) {
                                img.remove();
                            }
                            let loadBtn = dropzone.querySelector('.photo-galley__load-btn');
                            if (loadBtn && loadBtn.length !== 0) {
                                loadBtn.remove();
                            }

                            let node = document.createElement('img');
                            node.setAttribute('src', e.target.result);
                            dropzone.appendChild(node);
                        };

                        reader.readAsDataURL(file);
                    }

                    let filesToBeAdded = dataTransfer.files;
                    dropzoneInput.files = filesToBeAdded;

                }, false);
            });

        });
    </script>
@endsection
