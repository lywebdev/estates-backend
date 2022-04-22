@extends('layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <section id="content" class="page__app-submission">
        <div class="breadcrumbs">
            <div class="breadcrumbs__bg">
                <img src="/img/breadcrumbs-photo.jpg" alt="">
            </div>
            <div class="ac-grid">
                <div class="breadcrumbs__path">
                    <a href="#" class="breadcrumbs__item breadcrumbs__prev">Главная</a>
                    <span class="breadcrumbs__item breadcrumbs__current">Подать объявление</span>
                </div>
                <div class="breadcrumbs__title">Подать объявление</div>
            </div>
        </div>

        <form class="section mt-30" id="estate-submit-form"
                action="{{ route('submit') }}"
                method="post"
                data-category="{{ $esCategory->slug }}"
                data-user-auth="{{ \Illuminate\Support\Facades\Auth::check() }}">
            <input type="hidden" name="data" id="json-data" value="{{ $data }}">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="section__title">Информация</div>

                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('submit.sortable-section')
                                </div>
                            </div>
                            <div class="row app-submission__row">
                                <div class="col-md-12">
                                    <div class="row for-free-rate">
                                        <div class="col-md-4">
                                            <label class="form-label" for="acres">Соток</label>
                                            <input type="text" class="input" name="acres" id="acres" placeholder="Сколько соток?">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label">Комнатность</div>
                                            <div class="select roomSize-select"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="price">Стоимость, 〒</label>
                                            <input type="text" class="input" name="price" id="price" placeholder="Укажите стоимость">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row app-submission__row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-label">Состояние</div>
                                            <div class="select state-select"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="area">Общая площадь, м2</label>
                                            <input type="text" class="input" name="area" id="area" placeholder="Укажите площадь">
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label for="floor" class="form-label">Этаж</label>
                                            <input type="text" class="input" name="floor" id="floor" placeholder="Этаж">
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label class="form-label" for="floors">Этажность</label>
                                            <input type="text" class="input" name="floors" id="floors" placeholder="Этажность">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room preview -->
                            <div class="row">
                                <div class="room-preview">
                                </div>
                            </div>

                            <div class="row app-submission__row">
                                <div class="col-md-4 col-padding">
                                    <div class="form-label">Район</div>
                                    <div class="select district-select"></div>
                                </div>
                                <div class="col-md-4 col-padding">
                                    <div class="form-label">Город/поселок</div>
                                    <div class="select city-select"></div>
                                </div>
                                <div class="col-md-3 fs--14 col-padding">
                                    <label for="street" class="form-label">Улица или Микрорайон</label>
                                    <input type="text" class="input" name="street" id="street" placeholder="Укажите улицу">
                                </div>
                                <div class="col-md-1 fs--14">
                                    <label for="house_number" class="form-label">Номер дома</label>
                                    <input type="text" class="input" name="house_number" id="house_number" placeholder="№">
                                </div>
                            </div>

                            <div class="row app-submission__row">
                                <div class="col-md-4">
                                    <label for="owner_name" class="form-label">Имя собственника</label>
                                    <input type="text" class="input" name="owner_name" id="owner_name" placeholder="Укажите имя">
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Контактный телефон</label>
                                    <input type="text" class="input" name="phone" id="phone" placeholder="Укажите телефон">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mark-on-the-map">
                                <p class="mark-on-the-map__info">Указать место на карте</p>
                                <div class="mark-on-the-map__map">
                                    <img src="/img/app-subm__map.jpg" alt="map image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="app-submission__photos">
                        <div class="section__title">Фотографии объекта</div>
                        <p class="section-p">Фото объекта</p>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="section__desc">Позаботьтесь, чтобы это фото было самое красивое и эффективное. Постарайтесь, чтобы на фото не было лишних предметов</p>
                            </div>
                        </div>

                        <div class="photo-gallery mt-25">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 photo-gallery__main">
                                    <div class="photo-gallery__image dropzoneContainer">
                                        <div class="photo-galley__load-btn">
                                            <div class="dropzoneContainer__image">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                </svg>
                                                <span>Фото объекта</span>
                                            </div>
                                            <input type="file" name="images[]" class="dropzoneInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 photo-gallery__images">
                                    <div class="row sortableContainer">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <div class="dropzoneContainer__image">
                                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                        </svg>
                                                        <span>Фото объекта</span>
                                                    </div>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-photo btn btn--gray">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C15.514 0 20 4.48599 20 10C20 15.514 15.514 20 10 20C4.48599 20 0 15.514 0 10C0 4.48595 4.48599 0 10 0ZM10 18.75C14.8247 18.75 18.75 14.8247 18.75 10C18.75 5.17525 14.8247 1.25 10 1.25C5.17525 1.25 1.25001 5.17522 1.25001 10C1.25001 14.8247 5.17525 18.75 10 18.75ZM4.4531 10C4.4531 10.3452 4.73295 10.625 5.07811 10.625H9.375V14.9219C9.375 15.2671 9.65484 15.5469 10 15.5469C10.3452 15.5469 10.625 15.2671 10.625 14.9219V10.625H14.9219C15.2671 10.625 15.5469 10.3452 15.5469 10C15.5469 9.6548 15.2671 9.375 14.9219 9.375H10.625V5.07811C10.625 4.73291 10.3452 4.4531 10 4.4531C9.65484 4.4531 9.375 4.73291 9.375 5.07811V9.375H5.07811C4.73295 9.375 4.4531 9.65484 4.4531 10Z" fill="#7A7A87"/>
                                </svg>
                                <span>Добавить фото</span>
                            </div>
                        </div>

                        <div class="layout mt-15">
                            <p class="section-p">Планировка</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="section__desc">Планировка в несколько раз увеличивает шанс продажи. По возможности загрузите планировку</p>
                                </div>
                            </div>
                            <div class="photo-gallery">
                                <div class="photo-gallery__layout">
                                    <div class="photo-gallery__image dropzoneContainer">
                                        <div class="photo-galley__load-btn">
                                            <div class="dropzoneContainer__image">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                </svg>
                                                <span>Фото объекта</span>
                                            </div>
                                            <input type="file" name="images[]" class="dropzoneInput" id="layout">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="btn btn--gray add-layout">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 0C15.514 0 20 4.48599 20 10C20 15.514 15.514 20 10 20C4.48599 20 0 15.514 0 10C0 4.48595 4.48599 0 10 0ZM10 18.75C14.8247 18.75 18.75 14.8247 18.75 10C18.75 5.17525 14.8247 1.25 10 1.25C5.17525 1.25 1.25001 5.17522 1.25001 10C1.25001 14.8247 5.17525 18.75 10 18.75ZM4.4531 10C4.4531 10.3452 4.73295 10.625 5.07811 10.625H9.375V14.9219C9.375 15.2671 9.65484 15.5469 10 15.5469C10.3452 15.5469 10.625 15.2671 10.625 14.9219V10.625H14.9219C15.2671 10.625 15.5469 10.3452 15.5469 10C15.5469 9.6548 15.2671 9.375 14.9219 9.375H10.625V5.07811C10.625 4.73291 10.3452 4.4531 10 4.4531C9.65484 4.4531 9.375 4.73291 9.375 5.07811V9.375H5.07811C4.73295 9.375 4.4531 9.65484 4.4531 10Z" fill="#7A7A87"/>
                                        </svg>
                                        Добавить фото
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="delimiter"></div>

            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row app-submission__row">
                        <div class="col-md-8">

                            <label for="description" class="form-label">Дополнительно</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="textarea"></textarea>

                            <div class="app-submission__options">
                                <div class="accordion-container">
                                    <div class="ac">
                                        <div class="ac-header ac-trigger">
                                            <div class="app-submission__options__toggle-btn">
                                                Показать
                                                <span>
                                                Скрыть параметры
                                                <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.38863 4.97279C9.30659 4.97336 9.22525 4.95746 9.14929 4.92602C9.07334 4.89457 9.00429 4.84821 8.94611 4.78959L5.73234 1.57021C5.63511 1.47277 5.51988 1.39568 5.39324 1.34335C5.26659 1.29103 5.13102 1.26449 4.99426 1.26525C4.8575 1.26601 4.72223 1.29406 4.59618 1.34779C4.47013 1.40152 4.35577 1.47989 4.25962 1.57841L1.08686 4.82911C1.02956 4.88988 0.960897 4.93848 0.884861 4.97208C0.808825 5.00567 0.726944 5.02359 0.643995 5.02478C0.561047 5.02597 0.478692 5.01042 0.401736 4.97902C0.324781 4.94762 0.254767 4.90102 0.195778 4.84192C0.136788 4.78282 0.090006 4.71241 0.0581605 4.6348C0.026315 4.55719 0.0100442 4.47394 0.0102975 4.38989C0.0105507 4.30585 0.027322 4.2227 0.0596343 4.1453C0.0919465 4.0679 0.139151 3.9978 0.198496 3.93908L3.37126 0.688377C3.7987 0.251308 4.37988 0.0039348 4.98722 0.000554489C5.59457 -0.00282582 6.17847 0.238063 6.61074 0.670347L9.82451 3.88973C9.91244 3.97776 9.97261 4.09023 9.99742 4.2129C10.0222 4.33558 10.0106 4.46295 9.96391 4.5789C9.91724 4.69485 9.83767 4.79417 9.73527 4.86428C9.63287 4.9344 9.51223 4.97216 9.38863 4.97279Z" fill="#212137"/>
                                                </svg>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="ac-panel">
                                            <div class="ac-text">
                                                <div class="row app-submission__option-select">
                                                    <div class="col-md-4">
                                                        <div class="form-label">Целевое назначение</div>
                                                        <div class="select purpose-select"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-label">Материал стен</div>
                                                        <div class="select wallMaterial-select"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="year" class="form-label">Год постройки</label>
                                                        <input type="text" class="input" name="year" id="year" placeholder="Укажите год">
                                                    </div>
                                                </div>

                                                <div class="row app-submission__option-select">
                                                    <div class="col-md-4">
                                                        <div class="form-label">Канализация</div>
                                                        <div class="select sewage-select"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="ceiling_height" class="form-label">Высота потолков, м</label>
                                                        <input type="text" class="input" name="ceiling_height" id="ceiling_height" placeholder="Укажите высоту">
                                                    </div>

                                                    <div class="col-md-4 col-lg-4 col-xl-2">
                                                        <div class="form-label">Мебель</div>
                                                        <div class="radio-container f ai-c">
                                                            <div class="radio-input mr-15">
                                                                <input type="radio" name="furniture" class="furniture-input" id="furniture_yes" value="yes">
                                                                <label for="furniture_yes"><span>Да</span></label>
                                                            </div>
                                                            <div class="radio-input">
                                                                <input type="radio" name="furniture" class="furniture-input" id="furniture_no" value="no" checked>
                                                                <label for="furniture_no"><span>Нет</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xl-2">
                                                        <div class="form-label">Паркинг</div>
                                                        <div class="radio-container f ai-c">
                                                            <div class="radio-input mr-15">
                                                                <input type="radio" name="parking" id="parking_yes" class="parking-input" value="yes">
                                                                <label for="parking_yes"><span>Да</span></label>
                                                            </div>
                                                            <div class="radio-input">
                                                                <input type="radio" name="parking" id="parking_no" class="parking-input" value="no" checked>
                                                                <label for="parking_no"><span>Нет</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row app-submission__option-section">
                                                    <div class="col-md-4">
                                                        <label for="kitchen_area" class="form-label">Площадь кухни</label>
                                                        <input type="text" class="input" name="kitchen_area" id="kitchen_area" placeholder="Укажите площадь">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="living_area" class="form-label">Жилая площадь, м2</label>
                                                        <input type="text" class="input" name="living_area" id="living_area" placeholder="Укажите площадь">
                                                    </div>
                                                </div>

                                                <div class="row app-submission__option-section">
                                                    <div class="col-md-4">
                                                        <div class="form-label">Санузел</div>
                                                        <div class="select bathroom-select"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    @guest ()
                        <div class="row app-submission__row">
                            <div class="col-md-6">
                                <div class="row feedback">
                                    <div class="col-md-7 col-padding">
                                        <div class="need-auth">
                                            <div class="need-auth__avatar">
                                                <svg width="28" height="42" viewBox="0 0 28 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.0413 24.5318C5.58326 25.206 -0.0987139 31.5079 0.000297804 38.9956V39.3753C0.000297804 40.8251 1.17556 42.0003 2.6253 42.0003C4.07504 42.0003 5.2503 40.8251 5.2503 39.3753V38.8906C5.17138 34.2931 8.5642 30.3726 13.1253 29.7906C17.94 29.3132 22.2301 32.8292 22.7075 37.6439C22.7358 37.9285 22.75 38.2143 22.7503 38.5004V39.3753C22.7503 40.8251 23.9255 42.0003 25.3753 42.0003C26.825 42.0003 28.0003 40.8251 28.0003 39.3753V38.5003C27.9917 30.7596 21.7097 24.4915 13.9691 24.5C13.6596 24.5004 13.3501 24.511 13.0413 24.5318Z" fill="#AA0001"/>
                                                    <path d="M14 21C19.7989 21 24.5 16.299 24.5 10.5C24.5 4.70105 19.7989 0 14 0C8.20105 0 3.5 4.70105 3.5 10.5C3.50574 16.2966 8.20342 20.9942 14 21ZM14 5.25C16.8995 5.25 19.25 7.60052 19.25 10.5C19.25 13.3995 16.8995 15.75 14 15.75C11.1005 15.75 8.75 13.3995 8.75 10.5C8.75 7.60052 11.1005 5.25 14 5.25Z" fill="#AA0001"/>
                                                </svg>
                                            </div>
                                            <div class="need-auth__text">
                                                <span><a href="{{ route('loginForm') }}">Войдите в личный кабинет</a>, чтобы опубликовать.</span>
                                                <span>Внесённые данные сохранятся.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label for="contact_phone" class="form-label">Контактный телефон</label>
                                            <input type="text" class="input" placeholder="Укажите номер телефона" name="contact_phone" id="contact_phone">
                                        </div>
                                        <div class="f jc-sb app-submission__choice">
                                            <div class="app-submission__choice-item">
                                                <div class="btn">Я - Собственник</div>
                                            </div>
                                            <div class="app-submission__choice-item">
                                                <div class="btn">Я - Риэлтор</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest

                    <button type="submit" class="btn form__submit">Опубликовать</button>
                </div>
            </div>

        </form>

        <!-- Баннер -->
        <div class="feedback-banner mt">
            <div class="feedback-banner__bg">
                <img src="/img/home/form-bg.jpg" alt="banner">
            </div>
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="feedback-banner__main">
                        <div class="feedback-banner__info">
                            <div class="feedback-banner__title">
                                <span>Консультируем</span>
                                <span>бесплатно</span>
                            </div>
                            <p>
                                <span>Оставьте заявку на консультацию или</span>
                                <span class="mobile-div">звоните нам по телефону: <a href="#">+7 (727) 356-99-21</a></span>
                            </p>
                        </div>
                        <div class="feedback-banner__form">
                            <div class="form">
                                <div class="form__title">Форма заполнения</div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form__input">
                                        <input type="text" class="input" placeholder="Ваше имя" name="name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 form__input">
                                        <input type="text" class="input" placeholder="Ваше имя" name="phone">
                                    </div>
                                </div>
                                <div class="form__submit">
                                    <button type="submit" class="btn" name="send">Отправить</button>
                                </div>
                                <div class="form__info">
                                    <p>Отправляя заявку, вы соглашаетесь на <a href="#" class="color--red">обработку персональных данных</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/components/select.js')}}"></script>
    <script src="{{ asset('libs/sortable/sortable.min.js') }}"></script>
    <script src="{{ asset('js/components/alert.js') }}"></script>

    <script src="{{ asset('js/pages/app-submission.js') }}"></script>
    <script src="{{ asset("js/components/submit/main.js") }}"></script>
@endsection
