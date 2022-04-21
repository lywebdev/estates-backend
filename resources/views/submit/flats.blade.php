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

        <section class="section mt-30">

            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="section__title">Информация</div>

                    <form class="row" id="estate-submit-form"
                          action=""
                          method="post"
                          data-category="{{ $esCategory->slug }}"
                          data-user-auth="{{ \Illuminate\Support\Facades\Auth::check() }}"
                    >
                        @csrf
                        <input type="hidden" name="data" id="json-data" value="{{ $data }}">

                        <div class="col-lg-12 col-xl-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sortable-section first-screen__sortable">
                                        <div class="sortable form__sortable">

                                            <div class="sortable__items row">

                                                <div class="col-lg-4 col-md-4 col-xs-12">
                                                    <div class="col-md-12">
                                                        <div class="sortable__item sortable__item--selected">
                                                            <div class="sortable__selected-value">Квартиры</div>
                                                            <div class="sortable__selected-icon">
                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.99996 9.42017C5.7849 9.42017 5.56986 9.33805 5.4059 9.17417L0.246169 4.01439C-0.0820565 3.68616 -0.0820565 3.154 0.246169 2.8259C0.574263 2.49781 1.10632 2.49781 1.43457 2.8259L5.99996 7.39156L10.5654 2.82606C10.8936 2.49797 11.4256 2.49797 11.7537 2.82606C12.0821 3.15416 12.0821 3.68632 11.7537 4.01455L6.59403 9.17433C6.42999 9.33824 6.21495 9.42017 5.99996 9.42017Z" fill="white"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-12">
                                                    <div class="col-md-12">
                                                        <div class="sortable__item">Дома и участки</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-12">
                                                    <div class="col-md-12">
                                                        <div class="sortable__item">Коммерческая</div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row app-submission__row">
                                <div class="col-md-12">
                                    <div class="row for-free-rate">
                                        <div class="col-md-4">
                                            <div class="form-label">Комнатность</div>
                                            <div class="select roomSize-select"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Стоимость, 〒</label>
                                            <input type="text" class="input" name="cost" value="70000" placeholder="Укажите стоимость">
                                        </div>
                                        <div class="col-md-4 col-padding rate-free">
                                            <a href="#" class="btn btn--gray">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8383 9.19395C11.8071 9.17899 10.6407 8.6046 10.4334 8.53001C10.3488 8.49962 10.2581 8.46996 10.1617 8.46996C10.0042 8.46996 9.87187 8.54845 9.76881 8.70263C9.65229 8.87582 9.29956 9.28814 9.19057 9.41131C9.17634 9.42757 9.15691 9.44699 9.14527 9.44699C9.13483 9.44699 8.95431 9.37266 8.89966 9.34892C7.64839 8.80538 6.69863 7.49832 6.56839 7.2779C6.54979 7.24621 6.54902 7.23183 6.54886 7.23183C6.55343 7.21505 6.59551 7.17286 6.61722 7.1511C6.68076 7.08824 6.74959 7.00538 6.81618 6.92523C6.84772 6.88725 6.8793 6.84923 6.91031 6.81338C7.00694 6.70097 7.04995 6.6137 7.09982 6.5126L7.12595 6.46008C7.24772 6.21816 7.14372 6.01401 7.11011 5.94808C7.08252 5.89292 6.59 4.70424 6.53764 4.57936C6.41172 4.27801 6.24533 4.1377 6.01411 4.1377C5.99265 4.1377 6.01411 4.1377 5.92413 4.14149C5.81457 4.14611 5.21795 4.22466 4.95416 4.39094C4.67442 4.56731 4.20117 5.12949 4.20117 6.11816C4.20117 7.00798 4.76585 7.84814 5.00829 8.16767C5.01431 8.17572 5.02538 8.19208 5.04143 8.21557C5.9699 9.57151 7.12735 10.5764 8.3007 11.0451C9.43031 11.4963 9.96522 11.5485 10.2693 11.5485C10.2694 11.5485 10.2694 11.5485 10.2694 11.5485C10.3972 11.5485 10.4995 11.5385 10.5897 11.5296L10.6469 11.5241C11.0372 11.4895 11.8947 11.0452 12.0898 10.5031C12.2435 10.0761 12.284 9.60964 12.1817 9.44034C12.1117 9.32523 11.991 9.26731 11.8383 9.19395Z" fill="#212137"/>
                                                    <path d="M8.14201 0C3.80871 0 0.283313 3.49891 0.283313 7.79964C0.283313 9.19065 0.655572 10.5523 1.36077 11.7439L0.0110009 15.7255C-0.0141419 15.7997 0.00455936 15.8818 0.0594685 15.9377C0.0991048 15.9782 0.152871 16 0.20778 16C0.228819 16 0.250014 15.9968 0.270689 15.9902L4.42238 14.671C5.55848 15.278 6.84253 15.5984 8.14207 15.5984C12.4749 15.5984 16 12.0999 16 7.79964C16 3.49891 12.4749 0 8.14201 0ZM8.14201 13.9737C6.91921 13.9737 5.73484 13.6206 4.71677 12.9526C4.68253 12.9301 4.64279 12.9185 4.60279 12.9185C4.58165 12.9185 4.56046 12.9218 4.53983 12.9283L2.46009 13.5894L3.13147 11.6087C3.15318 11.5446 3.14233 11.4739 3.10233 11.4192C2.32705 10.3599 1.91723 9.10831 1.91723 7.79964C1.91723 4.39481 4.70965 1.62473 8.14196 1.62473C11.5739 1.62473 14.366 4.39481 14.366 7.79964C14.366 11.2041 11.574 13.9737 8.14201 13.9737Z" fill="#212137"/>
                                                </svg>
                                                Оценить бесплатно онлайн
                                            </a>
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
                                            <label class="form-label">Общая площадь, м2</label>
                                            <input type="text" class="input" name="area" value="54" placeholder="Укажите площадь">
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label for="floor" class="form-label">Этаж</label>
                                            <input type="text" class="input" value="7" name="floor" id="floor" placeholder="Укажите этаж">
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label class="form-label" for="floors">Этажность</label>
                                            <input type="text" class="input" value="1" name="floors" id="floors" placeholder="Укажите этажность">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room preview -->
                            <div class="row">
                                <div class="room-preview">
                                    <div class="room-preview__left">
                                        <div class="room-preview__img">
                                            <img src="/img/room-preview.jpg" alt="preview img">
                                        </div>
                                    </div>
                                    <div class="room-preview__right">
                                        <div class="room-preview__name">Евро</div>
                                        <div class="room-preview__description">Обывательский термин, широко распространённый в России и странах СНГ для обозначения особого типа ремонта в жилых или коммерческих помещениях. </div>
                                    </div>
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
                                    <input type="text" class="input" name="street" id="street" value="пр-т. Абая">
                                </div>
                                <div class="col-md-1 fs--14">
                                    <label for="house_number" class="form-label">Номер дома</label>
                                    <input type="text" class="input" name="house_number" id="house_number" value="16">
                                </div>
                            </div>

                            <div class="row app-submission__row">
                                <div class="col-md-4">
                                    <label for="room_number" class="form-label">Номер квартиры</label>
                                    <input type="text" class="input" name="room_number" id="room_number" value="32">
                                </div>
                                <div class="col-md-4">
                                    <label for="owner_name" class="form-label">Имя собственника</label>
                                    <input type="text" class="input" name="owner_name" id="owner_name" value="Иван Иванов">
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Контактный телефон</label>
                                    <input type="text" class="input" name="phone" id="phone" value="+7 (800) 777-30-94">
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
                    </form>

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
                                    <div class="photo-gallery__image">
                                        <img src="/img/photo-gallery/1.jpg" alt="1">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 photo-gallery__images">
                                    <div class="row sortableContainer">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <div class="photo-galley__load-btn">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                                    </svg>
                                                    <span>Фото объекта</span>
                                                    <input type="file" name="images[]" class="dropzoneInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row sortableContainer">
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row sortableContainer">
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="photo-gallery__image dropzoneContainer">
                                                <img src="/img/photo-gallery/1.jpg" alt="1">
                                                <input type="file" name="images[]" class="dropzoneInput">
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
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M31.5 9H26.745L24 6H15V9H22.68L25.425 12H31.5V30H7.5V16.5H4.5V30C4.5 31.65 5.85 33 7.5 33H31.5C33.15 33 34.5 31.65 34.5 30V12C34.5 10.35 33.15 9 31.5 9ZM12 21C12 25.14 15.36 28.5 19.5 28.5C23.64 28.5 27 25.14 27 21C27 16.86 23.64 13.5 19.5 13.5C15.36 13.5 12 16.86 12 21ZM19.5 16.5C21.975 16.5 24 18.525 24 21C24 23.475 21.975 25.5 19.5 25.5C17.025 25.5 15 23.475 15 21C15 18.525 17.025 16.5 19.5 16.5ZM7.5 9H12V6H7.5V1.5H4.5V6H0V9H4.5V13.5H7.5V9Z" fill="#7A7A87"/>
                                            </svg>
                                            <span>Фото объекта</span>
                                        </div>
                                        <input type="file" name="images[]" class="dropzoneInput">
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

                            <label for="" class="form-label">Дополнительно</label>
                            <textarea name="" id="" cols="30" rows="10" class="textarea">Актуально! Продажа 2-х комнатной квартиры с ремонтом! Расположение: г.Киев, Печерский район, ул. Большая Васильковская 145/1 (чешский проект 1967г), метро Лыбедская 2 минуты ходьбы. Планировка: Общая площадь=50м, 7этаж/9, Высота потолков = 2,54м. Кухня-гостиная + спальня + санузел + гардеробная Ремонт: В Квартире современный ремонт, мебель и техника, всё остается!</textarea>

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
                                                <div class="row app-submission__option-section">
                                                    <div class="col-md-4">
                                                        <label for="" class="form-label">Жилая площадь, м2</label>
                                                        <input type="text" class="input" value="24">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" class="form-label">Площадь кухни</label>
                                                        <input type="text" class="input" value="12">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-label">Материал стен</div>
                                                        <div class="select wallMaterial-select"></div>
                                                    </div>
                                                </div>

                                                <div class="row app-submission__option-section">
                                                    <div class="col-md-4">
                                                        <label for="year" class="form-label">Год постройки</label>
                                                        <input type="text" class="input" name="year" id="year" value="12">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="ceiling_height" class="form-label">Высота потолков, м</label>
                                                        <input type="text" class="input" name="ceiling_height" id="ceiling_height" value="12">
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xl-2">
                                                        <div class="form-label">Мебель</div>
                                                        <div class="radio-container f ai-c">
                                                            <div class="radio-input mr-15">
                                                                <input type="radio" name="furniture" id="furniture_yes">
                                                                <label for="furniture_yes"><span>Да</span></label>
                                                            </div>
                                                            <div class="radio-input">
                                                                <input type="radio" name="furniture" id="furniture_no">
                                                                <label for="furniture_no"><span>Нет</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xl-2">
                                                        <div class="form-label">Паркинг</div>
                                                        <div class="radio-container f ai-c">
                                                            <div class="radio-input mr-15">
                                                                <input type="radio" name="parking" id="parking_yes">
                                                                <label for="parking_yes"><span>Да</span></label>
                                                            </div>
                                                            <div class="radio-input">
                                                                <input type="radio" name="parking" id="parking_no">
                                                                <label for="parking_no"><span>Нет</span></label>
                                                            </div>
                                                        </div>
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
                    <button type="submit" class="btn form__submit">Опубликовать</button>
                </div>
            </div>

        </section>

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
    <script src="{{ asset('js/pages/app-submission.js') }}"></script>
    <script src="{{ asset("js/components/submit/main.js") }}"></script>
@endsection
