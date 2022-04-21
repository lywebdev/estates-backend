@extends('layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <section id="content" class="page__ec">
        <div class="ac-grid">
            <div class="estate-card">
                <div class="ec-grid">
                    @if ($estate->photos && $estate->photos->count() > 0)
                        <div class="ec-slider">
                            <div class="ec-slider__main">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($estate->photos as $key => $photo)
                                            <div class="swiper-slide ec-slider__main__slide">
                                                <div class="slide__bg">
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}"
                                                         alt="{{ $estate->name }}, фотография №{{$key}}">
                                                </div>
                                                @if ($loop->first)
                                                    <div class="slide__overlay">
                                                        <a href="#" class="btn btn--white">Посмотреть все фотографии</a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="ec-slider__main__navigation">
                                    <div class="btn__prev btn__item slider-btn">
                                        <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.312271 21.572C0.312019 21.3861 0.349063 21.202 0.421266 21.0303C0.493469 20.8586 0.599402 20.7027 0.732952 20.5717L8.0681 13.3304C8.29012 13.1113 8.46624 12.8511 8.5864 12.5648C8.70656 12.2786 8.76841 11.9717 8.76841 11.6618C8.76841 11.3519 8.70656 11.0451 8.5864 10.7588C8.46624 10.4725 8.29012 10.2124 8.0681 9.99329L0.742512 2.7633C0.605537 2.63271 0.496281 2.47651 0.421119 2.3038C0.345958 2.13109 0.306395 1.94533 0.304741 1.75737C0.303086 1.56941 0.339372 1.383 0.411482 1.20902C0.483592 1.03505 0.590081 0.876997 0.724736 0.744081C0.859391 0.611166 1.01952 0.506052 1.19577 0.434875C1.37202 0.363697 1.56086 0.327879 1.75129 0.329513C1.94171 0.331146 2.1299 0.370197 2.30487 0.444387C2.47984 0.518577 2.63809 0.626421 2.77039 0.761627L10.096 7.99162C11.0809 8.96564 11.6341 10.2856 11.6341 11.6618C11.6341 13.038 11.0809 14.358 10.096 15.332L2.76083 22.5733C2.56026 22.7714 2.30466 22.9064 2.02638 22.961C1.7481 23.0157 1.45964 22.9877 1.1975 22.8805C0.935367 22.7733 0.711337 22.5917 0.55376 22.3588C0.396184 22.1259 0.312143 21.8521 0.312271 21.572Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="btn__next btn__item slider-btn">
                                        <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.312271 21.572C0.312019 21.3861 0.349063 21.202 0.421266 21.0303C0.493469 20.8586 0.599402 20.7027 0.732952 20.5717L8.0681 13.3304C8.29012 13.1113 8.46624 12.8511 8.5864 12.5648C8.70656 12.2786 8.76841 11.9717 8.76841 11.6618C8.76841 11.3519 8.70656 11.0451 8.5864 10.7588C8.46624 10.4725 8.29012 10.2124 8.0681 9.99329L0.742512 2.7633C0.605537 2.63271 0.496281 2.47651 0.421119 2.3038C0.345958 2.13109 0.306395 1.94533 0.304741 1.75737C0.303086 1.56941 0.339372 1.383 0.411482 1.20902C0.483592 1.03505 0.590081 0.876997 0.724736 0.744081C0.859391 0.611166 1.01952 0.506052 1.19577 0.434875C1.37202 0.363697 1.56086 0.327879 1.75129 0.329513C1.94171 0.331146 2.1299 0.370197 2.30487 0.444387C2.47984 0.518577 2.63809 0.626421 2.77039 0.761627L10.096 7.99162C11.0809 8.96564 11.6341 10.2856 11.6341 11.6618C11.6341 13.038 11.0809 14.358 10.096 15.332L2.76083 22.5733C2.56026 22.7714 2.30466 22.9064 2.02638 22.961C1.7481 23.0157 1.45964 22.9877 1.1975 22.8805C0.935367 22.7733 0.711337 22.5917 0.55376 22.3588C0.396184 22.1259 0.312143 21.8521 0.312271 21.572Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-slider__thumbs">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($estate->photos as $key => $photo)
                                            <div class="swiper-slide ec-slider__thumbs__slide">
                                                <div class="slide__bg">
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}"
                                                         alt="{{ $estate->name }}, фотография №{{$key}}"
                                                    >
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="ec-slider__thumbs__navigation">
                                    <div class="btn__prev btn__item slider-btn">
                                        <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.57807 1.93332C9.57827 2.0782 9.5494 2.22169 9.49313 2.3555C9.43686 2.48931 9.3543 2.61079 9.25022 2.71294L3.53368 8.35636C3.36065 8.5271 3.2234 8.72983 3.12975 8.95294C3.03611 9.17606 2.98791 9.4152 2.98791 9.6567C2.98791 9.89821 3.03611 10.1373 3.12975 10.3605C3.2234 10.5836 3.36065 10.7863 3.53368 10.957L9.24277 16.5916C9.34952 16.6934 9.43467 16.8151 9.49324 16.9497C9.55182 17.0843 9.58265 17.2291 9.58394 17.3756C9.58523 17.5221 9.55695 17.6674 9.50075 17.8029C9.44456 17.9385 9.36157 18.0617 9.25662 18.1653C9.15168 18.2689 9.02689 18.3508 8.88953 18.4063C8.75217 18.4617 8.605 18.4896 8.4566 18.4884C8.30819 18.4871 8.16153 18.4567 8.02517 18.3988C7.88881 18.341 7.76548 18.257 7.66238 18.1516L1.95329 12.517C1.18569 11.7579 0.754572 10.7292 0.754572 9.6567C0.754573 8.58418 1.18569 7.55548 1.95329 6.79638L7.66983 1.15297C7.82614 0.998579 8.02534 0.893426 8.24221 0.850816C8.45909 0.808206 8.68389 0.830055 8.88818 0.913597C9.09247 0.997139 9.26707 1.13862 9.38987 1.32014C9.51268 1.50166 9.57817 1.71505 9.57807 1.93332Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="btn__next btn__item slider-btn">
                                        <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.57807 1.93332C9.57827 2.0782 9.5494 2.22169 9.49313 2.3555C9.43686 2.48931 9.3543 2.61079 9.25022 2.71294L3.53368 8.35636C3.36065 8.5271 3.2234 8.72983 3.12975 8.95294C3.03611 9.17606 2.98791 9.4152 2.98791 9.6567C2.98791 9.89821 3.03611 10.1373 3.12975 10.3605C3.2234 10.5836 3.36065 10.7863 3.53368 10.957L9.24277 16.5916C9.34952 16.6934 9.43467 16.8151 9.49324 16.9497C9.55182 17.0843 9.58265 17.2291 9.58394 17.3756C9.58523 17.5221 9.55695 17.6674 9.50075 17.8029C9.44456 17.9385 9.36157 18.0617 9.25662 18.1653C9.15168 18.2689 9.02689 18.3508 8.88953 18.4063C8.75217 18.4617 8.605 18.4896 8.4566 18.4884C8.30819 18.4871 8.16153 18.4567 8.02517 18.3988C7.88881 18.341 7.76548 18.257 7.66238 18.1516L1.95329 12.517C1.18569 11.7579 0.754572 10.7292 0.754572 9.6567C0.754573 8.58418 1.18569 7.55548 1.95329 6.79638L7.66983 1.15297C7.82614 0.998579 8.02534 0.893426 8.24221 0.850816C8.45909 0.808206 8.68389 0.830055 8.88818 0.913597C9.09247 0.997139 9.26707 1.13862 9.38987 1.32014C9.51268 1.50166 9.57817 1.71505 9.57807 1.93332Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="ec-info">
                        <div class="ec-info__row">
                            <div class="ec-info__ls">
                                <div class="ec-info__name">{!! $estate->info !!}</div>
                                @if ($estate->location)
                                    <div class="ec-info__location f ai-c">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_58643_9256)">
                                                <path d="M8 0C6.14419 0.00229341 4.36504 0.740528 3.05279 2.05279C1.74053 3.36504 1.00229 5.14419 1 7C1 8.884 2.46667 11.5107 5.36067 14.806C5.6907 15.181 6.09684 15.4814 6.55205 15.6872C7.00727 15.893 7.5011 15.9994 8.00067 15.9994C8.50023 15.9994 8.99407 15.893 9.44928 15.6872C9.90449 15.4814 10.3106 15.181 10.6407 14.806C13.5333 11.5113 15 8.88467 15 7C14.9977 5.14419 14.2595 3.36504 12.9472 2.05279C11.635 0.740528 9.85581 0.00229341 8 0V0ZM9.13733 13.4873C8.99196 13.6436 8.81594 13.7682 8.62026 13.8535C8.42458 13.9387 8.21344 13.9827 8 13.9827C7.78656 13.9827 7.57542 13.9387 7.37974 13.8535C7.18406 13.7682 7.00804 13.6436 6.86267 13.4873C4.40733 10.6907 2.996 8.326 2.996 7.00067C2.996 5.67458 3.52278 4.40281 4.46047 3.46513C5.39815 2.52745 6.66992 2.00067 7.996 2.00067C9.32208 2.00067 10.5939 2.52745 11.5315 3.46513C12.4692 4.40281 12.996 5.67458 12.996 7.00067C13 8.326 11.5927 10.6907 9.13733 13.4873Z" fill="#AA0001"/>
                                                <path d="M7.99998 4.03668C7.4247 4.03668 6.86234 4.20727 6.38401 4.52688C5.90568 4.84649 5.53287 5.30076 5.31272 5.83225C5.09257 6.36374 5.03497 6.94858 5.1472 7.5128C5.25943 8.07703 5.53645 8.5953 5.94324 9.00209C6.35002 9.40887 6.8683 9.6859 7.43252 9.79813C7.99675 9.91036 8.58159 9.85276 9.11308 9.63261C9.64456 9.41246 10.0988 9.03965 10.4184 8.56132C10.7381 8.08299 10.9086 7.52063 10.9086 6.94535C10.9078 6.17419 10.601 5.43488 10.0557 4.88959C9.51045 4.3443 8.77113 4.03756 7.99998 4.03668ZM7.99998 7.85402C7.82026 7.85402 7.64458 7.80072 7.49515 7.70088C7.34572 7.60103 7.22925 7.45912 7.16048 7.29308C7.0917 7.12704 7.07371 6.94434 7.10877 6.76808C7.14383 6.59181 7.23037 6.4299 7.35745 6.30282C7.48453 6.17575 7.64644 6.0892 7.8227 6.05414C7.99897 6.01908 8.18167 6.03708 8.34771 6.10585C8.51375 6.17463 8.65566 6.29109 8.75551 6.44052C8.85535 6.58995 8.90864 6.76563 8.90864 6.94535C8.90847 7.18629 8.81268 7.41731 8.64231 7.58768C8.47194 7.75805 8.24092 7.85384 7.99998 7.85402Z" fill="#AA0001"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_58643_9256">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        {{ $estate->location }}
                                    </div>
                                @endif
                            </div>
                            <div class="ec-info__rs ec-info__cost-container">
                                @isset($estate->price)
                                    <div class="ec-info__cost">{{ number_format($estate->price, 2, '', ' ') }}&nbsp;〒</div>
                                    @isset($estate->area)
                                        <div class="ec-info__area">{{ number_format(($estate->price / $estate->area), 2, '', ' ') }} / м2</div>
                                    @endisset
                                @endisset
                            </div>
                        </div>
                        <div class="ec-info__buttons f jc-sb ai-c">
                            <div class="ec-info__add-to-wishlist">
                                <div class="btn btn--gray"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_58643_9286)">
                                            <path d="M12.9375 1.38824C12.1683 1.39569 11.4114 1.5832 10.7277 1.93576C10.0439 2.28832 9.45222 2.79613 9.00002 3.41849C8.54782 2.79613 7.95614 2.28832 7.27238 1.93576C6.58862 1.5832 5.83178 1.39569 5.06252 1.38824C3.66884 1.4439 2.35391 2.04913 1.40523 3.07159C0.45655 4.09405 -0.0486785 5.45056 1.55342e-05 6.84449C1.55342e-05 10.2585 3.50552 13.9132 6.45002 16.3785C7.16502 16.9797 8.06922 17.3093 9.00339 17.3093C9.93756 17.3093 10.8418 16.9797 11.5568 16.3785C14.4983 13.9132 18.0068 10.2585 18.0068 6.84449C18.0554 5.44944 17.5493 4.09194 16.5992 3.06929C15.649 2.04663 14.3324 1.44216 12.9375 1.38824ZM10.1078 14.6542C9.79758 14.9154 9.40513 15.0586 8.99964 15.0586C8.59416 15.0586 8.2017 14.9154 7.89152 14.6542C4.30652 11.6482 2.25002 8.80199 2.25002 6.84449C2.2022 6.0474 2.47073 5.26363 2.9973 4.66333C3.52388 4.06303 4.26599 3.69468 5.06252 3.63824C5.85904 3.69468 6.60115 4.06303 7.12773 4.66333C7.65431 5.26363 7.92284 6.0474 7.87502 6.84449C7.87502 7.14286 7.99354 7.42901 8.20452 7.63999C8.4155 7.85097 8.70165 7.96949 9.00002 7.96949C9.29839 7.96949 9.58453 7.85097 9.79551 7.63999C10.0065 7.42901 10.125 7.14286 10.125 6.84449C10.0772 6.0474 10.3457 5.26363 10.8723 4.66333C11.3989 4.06303 12.141 3.69468 12.9375 3.63824C13.734 3.69468 14.4762 4.06303 15.0027 4.66333C15.5293 5.26363 15.7978 6.0474 15.75 6.84449C15.75 8.80199 13.6935 11.6482 10.1078 14.6542Z" fill="#212137"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_58643_9286">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    В избранное</div>
                            </div>
                            <div class="ec-info__contact">
                                <a href="#" class="btn">Связаться</a>
                            </div>
                        </div>
                    </div>

                    @isset($estate->description)
                            <div class="ec-desc ec-desc__description read-more">
                                <div class="ec-desc__title">Описание</div>
                                <div class="ec-desc__text">{{ $estate->description }}</div>
                            </div>
                    @endisset

                    {!! $estate->options !!}

                    <div class="ec-map">
                        <img src="/img/estates/map.jpg" alt="map">
                        <div class="ec-map__text">Исторический, ул. Первомайская, д. 60 к1 (1.3 км до центра)</div>
                    </div>

                    <div class="ec-desc mortgage-selection">
                        <div class="ec-desc__title">Подобрать ипотеку</div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Первоначальный взнос</label>
                                <div class="mgg-input">
                                    <input type="text" class="input" value="3 000 000">
                                    <div class="mgg-input__after">〒</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Срок кредита</label>
                                <div class="mgg-input">
                                    <input type="text" class="input" value="30">
                                    <div class="mgg-input__after">Лет</div>
                                </div>
                            </div>
                        </div>

                        <div class="mgg-select__data">
                            <div class="mgg-select__loan-amount mgg-select__data-item">
                                <div class="mgg-select__data-item__title">Сумма кредита</div>
                                <div class="mgg-select__data-item__cost">3 000 000 〒</div>
                            </div>
                            <div class="mgg-select__room-cost mgg-select__data-item">
                                <div class="mgg-select__data-item__title">Стоимость недвижимости</div>
                                <div class="mgg-select__data-item__cost">7 000 000 〒</div>
                            </div>
                        </div>

                        <div class="mgg-select__banks">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mgg-select__bank">
                                        <div class="mgg-select__bank-img">
                                            <img src="/img/banks/втб.png" alt="">
                                        </div>
                                        <div class="mgg-select__bank-main">
                                            <div class="mgg-select__bank-name">ВТБ</div>
                                            <div class="mgg-select__bank-rates">
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Ставка</div>
                                                    <div class="bs">от 7.7%</div>
                                                </div>
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Платеж</div>
                                                    <div class="bs">37 787 〒 / мес</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mgg-select__bank">
                                        <div class="mgg-select__bank-img">
                                            <img src="/img/banks/втб.png" alt="">
                                        </div>
                                        <div class="mgg-select__bank-main">
                                            <div class="mgg-select__bank-name">ВТБ</div>
                                            <div class="mgg-select__bank-rates">
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Ставка</div>
                                                    <div class="bs">от 7.7%</div>
                                                </div>
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Платеж</div>
                                                    <div class="bs">37 787 〒 / мес</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mgg-select__bank">
                                        <div class="mgg-select__bank-img">
                                            <img src="/img/banks/втб.png" alt="">
                                        </div>
                                        <div class="mgg-select__bank-main">
                                            <div class="mgg-select__bank-name">ВТБ</div>
                                            <div class="mgg-select__bank-rates">
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Ставка</div>
                                                    <div class="bs">от 7.7%</div>
                                                </div>
                                                <div class="mgg-select__bank-rate">
                                                    <div class="ts">Платеж</div>
                                                    <div class="bs">37 787 〒 / мес</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Сервисы -->
                    <section class="section services-section">
                        <div class="container-fluid">
                            <div class="ac-grid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section__title">Сервисы</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row g-sm-4 services-section__container">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <a href="{{ route('submit', 'flats') }}" class="service-card">
                                        <div class="service-card__image">
                                            <img src="/img/services/1.jpg" alt="2">
                                        </div>
                                        <div class="service-card__main">
                                            <div class="service-card__name">Подача объявления онлайн</div>
                                            <div class="service-card__description">Самостоятельно разместельно разместите объявление и получите фотосъемку недвижимости в подарок</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <a href="{{ route('estimation') }}" class="service-card">
                                        <div class="service-card__image">
                                            <img src="/img/services/2.jpg" alt="2">
                                        </div>
                                        <div class="service-card__main">
                                            <div class="service-card__name">Оценка рыночной стоимости</div>
                                            <div class="service-card__description">Узнайте, сколько стоит ваша недвижимость</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <a href="#" class="service-card">
                                        <div class="service-card__image">
                                            <img src="/img/services/3.jpg" alt="2">
                                        </div>
                                        <div class="service-card__main">
                                            <div class="service-card__name">Страхование</div>
                                            <div class="service-card__description">Оформите страховой полис со скидкой до 50%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <a href="{{ route('speedMortgage') }}" class="service-card">
                                        <div class="service-card__image">
                                            <img src="/img/services/4.jpg" alt="2">
                                        </div>
                                        <div class="service-card__main">
                                            <div class="service-card__name">Ипотека онлайн</div>
                                            <div class="service-card__description">Подайте заявку и получите одобрение банков онлайн </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="ec-agent">
                    <div class="ec-agent__image">
                        <img src="/img/agents/1.jpg" alt="">
                    </div>
                    <div class="ec-agent__name">Котова Анастасия Андреевна</div>
                    <a href="#" class="ec-agent__phone">
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                        </svg>
                        +7 (812) 424-43-62</a>
                    <div class="ec-agent__text">или оставьте номер, и мы вам перезвоним в течение 2 минут</div>
                    <form action="">
                        <input type="text" class="input" placeholder="+7 (xxx) xxx-xx-xx">
                        <button class="btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Вас могут заинтересовать -->
        <section class="section collections-section roomsSlider section-slider">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section__title">Вас могут заинтересовать</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collections-section__container">
                <div class="row g-sm-4">
                    <div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
                        <div class="room">
                            <div class="room__photos estate-object-photos-slider">

                                <div class="room__photos-nav">
                                    <div class="room__photos-nav__prev room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="room__photos-nav__next room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="room__photos-items swiper-wrapper">
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/1.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/2.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/3.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/4.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/5.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/6.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/7.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/8.jpg" alt="image">
                                    </div>
                                </div>

                            </div>
                            <div class="room__main">
                                <div class="room__top">
                                    <div class="ls">
                                        <div class="room__cost">1 600 000 〒</div>
                                        <div class="room__cost-full">160 000 〒/м2</div>
                                    </div>
                                    <div class="rs">
                                        <div class="room__actions">
                                            <div class="room__action room__action--share">
                                                <div class="btn-square">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1259 5.14985V1.68754C11.1259 0.907574 12.0094 0.48747 12.6096 0.924789L12.7124 1.01096L20.2056 8.19846C20.5553 8.5339 20.5871 9.07268 20.3011 9.44513L20.2057 9.55151L12.7125 16.7413C12.1496 17.2814 11.2347 16.9346 11.1348 16.1987L11.1259 16.0649V12.6582L10.6965 12.6958C7.69691 13.0087 4.82186 14.3599 2.05333 16.7717C1.40445 17.337 0.400533 16.8025 0.507251 15.9486C1.33824 9.29916 4.81558 5.63416 10.7517 5.17441L11.1259 5.14985ZM13.0009 3.88584V6.06254C13.0009 6.5803 12.5812 7.00004 12.0634 7.00004C7.22163 7.00004 4.22086 9.0952 2.9243 13.4465L2.82548 13.7947L3.26572 13.4987C6.06132 11.6715 8.99809 10.75 12.0634 10.75C12.538 10.75 12.9303 11.1027 12.9923 11.5603L13.0009 11.6875V13.8661L18.2024 8.87515L13.0009 3.88584Z" fill="#7A7A87"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="room__action room__action--wishlist room__action--wishlist--added">
                                                <div class="btn-square">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_58391_1659)">
                                                            <path d="M12.9375 1.38831C12.1683 1.39575 11.4114 1.58326 10.7277 1.93582C10.0439 2.28838 9.45225 2.79619 9.00005 3.41856C8.54785 2.79619 7.95617 2.28838 7.27241 1.93582C6.58865 1.58326 5.83181 1.39575 5.06255 1.38831C3.66887 1.44396 2.35394 2.04919 1.40526 3.07165C0.456581 4.09412 -0.048648 5.45062 4.60518e-05 6.84455C4.60518e-05 10.2586 3.50555 13.9133 6.45005 16.3785C7.16505 16.9798 8.06925 17.3094 9.00342 17.3094C9.93759 17.3094 10.8418 16.9798 11.5568 16.3785C14.4983 13.9133 18.0068 10.2586 18.0068 6.84455C18.0555 5.4495 17.5493 4.092 16.5992 3.06935C15.6491 2.04669 14.3324 1.44222 12.9375 1.38831ZM10.1078 14.6543C9.79762 14.9155 9.40516 15.0587 8.99967 15.0587C8.59419 15.0587 8.20173 14.9155 7.89155 14.6543C4.30655 11.6483 2.25005 8.80205 2.25005 6.84455C2.20223 6.04747 2.47076 5.26369 2.99733 4.66339C3.52391 4.0631 4.26602 3.69474 5.06255 3.6383C5.85907 3.69474 6.60119 4.0631 7.12776 4.66339C7.65434 5.26369 7.92287 6.04747 7.87505 6.84455C7.87505 7.14292 7.99357 7.42907 8.20455 7.64005C8.41553 7.85103 8.70168 7.96955 9.00005 7.96955C9.29842 7.96955 9.58456 7.85103 9.79554 7.64005C10.0065 7.42907 10.125 7.14292 10.125 6.84455C10.0772 6.04747 10.3458 5.26369 10.8723 4.66339C11.3989 4.0631 12.141 3.69474 12.9375 3.6383C13.7341 3.69474 14.4762 4.0631 15.0028 4.66339C15.5293 5.26369 15.7979 6.04747 15.75 6.84455C15.75 8.80205 13.6935 11.6483 10.1078 14.6543Z" fill="#AA0102"/>
                                                            <path d="M15.5 3.99996C14.3 0.799957 10.6667 3.66662 9 5.49996L8 4.5L5 3L2.5 3.5L1.5 8L4 12L7.5 15.5H11L15 10C15.6667 9.33332 16.7 7.19996 15.5 3.99996Z" fill="#AA0102"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_58391_1659">
                                                                <rect width="18" height="18" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__options">
                                    <div class="room__option room__option--size">1 комн. квартира</div>
                                    <div class="room__option room__option--size">35.7 м2</div>
                                    <div class="room__option room__option--size">7 этаж</div>
                                </div>
                                <div class="room__address">г. Алматы, ул. Губина д. 20</div>
                                <div class="room__btns">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn">Детальнее</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn--no-bg">Показать телефон</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__overlay">
                                    <div class="room__realtor">
                                        <div class="ls">
                                            <div class="room__realtor__avatar">
                                                <img src="/img/kostova-anastasia.jpg" alt="Kostova Anastasia">
                                            </div>
                                        </div>
                                        <div class="rs">
                                            <div class="room__realtor__info">
                                                <a href="#" class="room__realtor__phone">
                                                    <span>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                                                        </svg>
                                                    </span>
                                                    +7 (812) 424-43-62
                                                </a>
                                                <div class="room__realtor__name">Котова Анастасия</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
                        <div class="room">
                            <div class="room__photos estate-object-photos-slider">

                                <div class="room__photos-nav">
                                    <div class="room__photos-nav__prev room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="room__photos-nav__next room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="room__photos-items swiper-wrapper">
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/1.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/2.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/3.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/4.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/5.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/6.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/7.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/8.jpg" alt="image">
                                    </div>
                                </div>

                            </div>
                            <div class="room__main">
                                <div class="room__top">
                                    <div class="ls">
                                        <div class="room__cost">1 600 000 〒</div>
                                        <div class="room__cost-full">160 000 〒/м2</div>
                                    </div>
                                    <div class="rs">
                                        <div class="room__actions">
                                            <div class="room__action room__action--share">
                                                <div class="btn-square">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1259 5.14985V1.68754C11.1259 0.907574 12.0094 0.48747 12.6096 0.924789L12.7124 1.01096L20.2056 8.19846C20.5553 8.5339 20.5871 9.07268 20.3011 9.44513L20.2057 9.55151L12.7125 16.7413C12.1496 17.2814 11.2347 16.9346 11.1348 16.1987L11.1259 16.0649V12.6582L10.6965 12.6958C7.69691 13.0087 4.82186 14.3599 2.05333 16.7717C1.40445 17.337 0.400533 16.8025 0.507251 15.9486C1.33824 9.29916 4.81558 5.63416 10.7517 5.17441L11.1259 5.14985ZM13.0009 3.88584V6.06254C13.0009 6.5803 12.5812 7.00004 12.0634 7.00004C7.22163 7.00004 4.22086 9.0952 2.9243 13.4465L2.82548 13.7947L3.26572 13.4987C6.06132 11.6715 8.99809 10.75 12.0634 10.75C12.538 10.75 12.9303 11.1027 12.9923 11.5603L13.0009 11.6875V13.8661L18.2024 8.87515L13.0009 3.88584Z" fill="#7A7A87"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="room__action room__action--wishlist">
                                                <div class="btn-square">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_58643_9286)">
                                                            <path d="M12.9375 1.38824C12.1683 1.39569 11.4114 1.5832 10.7277 1.93576C10.0439 2.28832 9.45222 2.79613 9.00002 3.41849C8.54782 2.79613 7.95614 2.28832 7.27238 1.93576C6.58862 1.5832 5.83178 1.39569 5.06252 1.38824C3.66884 1.4439 2.35391 2.04913 1.40523 3.07159C0.45655 4.09405 -0.0486785 5.45056 1.55342e-05 6.84449C1.55342e-05 10.2585 3.50552 13.9132 6.45002 16.3785C7.16502 16.9797 8.06922 17.3093 9.00339 17.3093C9.93756 17.3093 10.8418 16.9797 11.5568 16.3785C14.4983 13.9132 18.0068 10.2585 18.0068 6.84449C18.0554 5.44944 17.5493 4.09194 16.5992 3.06929C15.649 2.04663 14.3324 1.44216 12.9375 1.38824ZM10.1078 14.6542C9.79758 14.9154 9.40513 15.0586 8.99964 15.0586C8.59416 15.0586 8.2017 14.9154 7.89152 14.6542C4.30652 11.6482 2.25002 8.80199 2.25002 6.84449C2.2022 6.0474 2.47073 5.26363 2.9973 4.66333C3.52388 4.06303 4.26599 3.69468 5.06252 3.63824C5.85904 3.69468 6.60115 4.06303 7.12773 4.66333C7.65431 5.26363 7.92284 6.0474 7.87502 6.84449C7.87502 7.14286 7.99354 7.42901 8.20452 7.63999C8.4155 7.85097 8.70165 7.96949 9.00002 7.96949C9.29839 7.96949 9.58453 7.85097 9.79551 7.63999C10.0065 7.42901 10.125 7.14286 10.125 6.84449C10.0772 6.0474 10.3457 5.26363 10.8723 4.66333C11.3989 4.06303 12.141 3.69468 12.9375 3.63824C13.734 3.69468 14.4762 4.06303 15.0027 4.66333C15.5293 5.26363 15.7978 6.0474 15.75 6.84449C15.75 8.80199 13.6935 11.6482 10.1078 14.6542Z" fill="#212137"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_58643_9286">
                                                                <rect width="18" height="18" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__options">
                                    <div class="room__option room__option--size">1 комн. квартира</div>
                                    <div class="room__option room__option--size">35.7 м2</div>
                                    <div class="room__option room__option--size">7 этаж</div>
                                </div>
                                <div class="room__address">г. Алматы, ул. Губина д. 20</div>
                                <div class="room__btns">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn">Детальнее</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn--no-bg">Показать телефон</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__overlay">
                                    <div class="room__realtor">
                                        <div class="ls">
                                            <div class="room__realtor__avatar">
                                                <img src="/img/kostova-anastasia.jpg" alt="Kostova Anastasia">
                                            </div>
                                        </div>
                                        <div class="rs">
                                            <div class="room__realtor__info">
                                                <a href="#" class="room__realtor__phone">
                                                    <span>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                                                        </svg>
                                                    </span>
                                                    +7 (812) 424-43-62
                                                </a>
                                                <div class="room__realtor__name">Котова Анастасия</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
                        <div class="room">
                            <div class="room__photos estate-object-photos-slider">

                                <div class="room__photos-nav">
                                    <div class="room__photos-nav__prev room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="room__photos-nav__next room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="room__photos-items swiper-wrapper">
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/1.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/2.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/3.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/4.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/5.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/6.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/7.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/8.jpg" alt="image">
                                    </div>
                                </div>

                            </div>
                            <div class="room__main">
                                <div class="room__top">
                                    <div class="ls">
                                        <div class="room__cost">1 600 000 〒</div>
                                        <div class="room__cost-full">160 000 〒/м2</div>
                                    </div>
                                    <div class="rs">
                                        <div class="room__actions">
                                            <div class="room__action room__action--share">
                                                <div class="btn-square">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1259 5.14985V1.68754C11.1259 0.907574 12.0094 0.48747 12.6096 0.924789L12.7124 1.01096L20.2056 8.19846C20.5553 8.5339 20.5871 9.07268 20.3011 9.44513L20.2057 9.55151L12.7125 16.7413C12.1496 17.2814 11.2347 16.9346 11.1348 16.1987L11.1259 16.0649V12.6582L10.6965 12.6958C7.69691 13.0087 4.82186 14.3599 2.05333 16.7717C1.40445 17.337 0.400533 16.8025 0.507251 15.9486C1.33824 9.29916 4.81558 5.63416 10.7517 5.17441L11.1259 5.14985ZM13.0009 3.88584V6.06254C13.0009 6.5803 12.5812 7.00004 12.0634 7.00004C7.22163 7.00004 4.22086 9.0952 2.9243 13.4465L2.82548 13.7947L3.26572 13.4987C6.06132 11.6715 8.99809 10.75 12.0634 10.75C12.538 10.75 12.9303 11.1027 12.9923 11.5603L13.0009 11.6875V13.8661L18.2024 8.87515L13.0009 3.88584Z" fill="#7A7A87"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="room__action room__action--wishlist">
                                                <div class="btn-square">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_58643_9286)">
                                                            <path d="M12.9375 1.38824C12.1683 1.39569 11.4114 1.5832 10.7277 1.93576C10.0439 2.28832 9.45222 2.79613 9.00002 3.41849C8.54782 2.79613 7.95614 2.28832 7.27238 1.93576C6.58862 1.5832 5.83178 1.39569 5.06252 1.38824C3.66884 1.4439 2.35391 2.04913 1.40523 3.07159C0.45655 4.09405 -0.0486785 5.45056 1.55342e-05 6.84449C1.55342e-05 10.2585 3.50552 13.9132 6.45002 16.3785C7.16502 16.9797 8.06922 17.3093 9.00339 17.3093C9.93756 17.3093 10.8418 16.9797 11.5568 16.3785C14.4983 13.9132 18.0068 10.2585 18.0068 6.84449C18.0554 5.44944 17.5493 4.09194 16.5992 3.06929C15.649 2.04663 14.3324 1.44216 12.9375 1.38824ZM10.1078 14.6542C9.79758 14.9154 9.40513 15.0586 8.99964 15.0586C8.59416 15.0586 8.2017 14.9154 7.89152 14.6542C4.30652 11.6482 2.25002 8.80199 2.25002 6.84449C2.2022 6.0474 2.47073 5.26363 2.9973 4.66333C3.52388 4.06303 4.26599 3.69468 5.06252 3.63824C5.85904 3.69468 6.60115 4.06303 7.12773 4.66333C7.65431 5.26363 7.92284 6.0474 7.87502 6.84449C7.87502 7.14286 7.99354 7.42901 8.20452 7.63999C8.4155 7.85097 8.70165 7.96949 9.00002 7.96949C9.29839 7.96949 9.58453 7.85097 9.79551 7.63999C10.0065 7.42901 10.125 7.14286 10.125 6.84449C10.0772 6.0474 10.3457 5.26363 10.8723 4.66333C11.3989 4.06303 12.141 3.69468 12.9375 3.63824C13.734 3.69468 14.4762 4.06303 15.0027 4.66333C15.5293 5.26363 15.7978 6.0474 15.75 6.84449C15.75 8.80199 13.6935 11.6482 10.1078 14.6542Z" fill="#212137"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_58643_9286">
                                                                <rect width="18" height="18" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__options">
                                    <div class="room__option room__option--size">1 комн. квартира</div>
                                    <div class="room__option room__option--size">35.7 м2</div>
                                    <div class="room__option room__option--size">7 этаж</div>
                                </div>
                                <div class="room__address">г. Алматы, ул. Губина д. 20</div>
                                <div class="room__btns">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn">Детальнее</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn--no-bg">Показать телефон</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__overlay">
                                    <div class="room__realtor">
                                        <div class="ls">
                                            <div class="room__realtor__avatar">
                                                <img src="/img/kostova-anastasia.jpg" alt="Kostova Anastasia">
                                            </div>
                                        </div>
                                        <div class="rs">
                                            <div class="room__realtor__info">
                                                <a href="#" class="room__realtor__phone">
                                                    <span>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                                                        </svg>
                                                    </span>
                                                    +7 (812) 424-43-62
                                                </a>
                                                <div class="room__realtor__name">Котова Анастасия</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
                        <div class="room">
                            <div class="room__photos estate-object-photos-slider">

                                <div class="room__photos-nav">
                                    <div class="room__photos-nav__prev room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                    <div class="room__photos-nav__next room__photos-nav__btn">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="room__photos-items swiper-wrapper">
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/1.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/2.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/3.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/4.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/5.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/6.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/7.jpg" alt="image">
                                    </div>
                                    <div class="room__photo-item swiper-slide">
                                        <img src="/img/rooms/8.jpg" alt="image">
                                    </div>
                                </div>

                            </div>
                            <div class="room__main">
                                <div class="room__top">
                                    <div class="ls">
                                        <div class="room__cost">1 600 000 〒</div>
                                        <div class="room__cost-full">160 000 〒/м2</div>
                                    </div>
                                    <div class="rs">
                                        <div class="room__actions">
                                            <div class="room__action room__action--share">
                                                <div class="btn-square">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1259 5.14985V1.68754C11.1259 0.907574 12.0094 0.48747 12.6096 0.924789L12.7124 1.01096L20.2056 8.19846C20.5553 8.5339 20.5871 9.07268 20.3011 9.44513L20.2057 9.55151L12.7125 16.7413C12.1496 17.2814 11.2347 16.9346 11.1348 16.1987L11.1259 16.0649V12.6582L10.6965 12.6958C7.69691 13.0087 4.82186 14.3599 2.05333 16.7717C1.40445 17.337 0.400533 16.8025 0.507251 15.9486C1.33824 9.29916 4.81558 5.63416 10.7517 5.17441L11.1259 5.14985ZM13.0009 3.88584V6.06254C13.0009 6.5803 12.5812 7.00004 12.0634 7.00004C7.22163 7.00004 4.22086 9.0952 2.9243 13.4465L2.82548 13.7947L3.26572 13.4987C6.06132 11.6715 8.99809 10.75 12.0634 10.75C12.538 10.75 12.9303 11.1027 12.9923 11.5603L13.0009 11.6875V13.8661L18.2024 8.87515L13.0009 3.88584Z" fill="#7A7A87"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="room__action room__action--wishlist">
                                                <div class="btn-square">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_58643_9286)">
                                                            <path d="M12.9375 1.38824C12.1683 1.39569 11.4114 1.5832 10.7277 1.93576C10.0439 2.28832 9.45222 2.79613 9.00002 3.41849C8.54782 2.79613 7.95614 2.28832 7.27238 1.93576C6.58862 1.5832 5.83178 1.39569 5.06252 1.38824C3.66884 1.4439 2.35391 2.04913 1.40523 3.07159C0.45655 4.09405 -0.0486785 5.45056 1.55342e-05 6.84449C1.55342e-05 10.2585 3.50552 13.9132 6.45002 16.3785C7.16502 16.9797 8.06922 17.3093 9.00339 17.3093C9.93756 17.3093 10.8418 16.9797 11.5568 16.3785C14.4983 13.9132 18.0068 10.2585 18.0068 6.84449C18.0554 5.44944 17.5493 4.09194 16.5992 3.06929C15.649 2.04663 14.3324 1.44216 12.9375 1.38824ZM10.1078 14.6542C9.79758 14.9154 9.40513 15.0586 8.99964 15.0586C8.59416 15.0586 8.2017 14.9154 7.89152 14.6542C4.30652 11.6482 2.25002 8.80199 2.25002 6.84449C2.2022 6.0474 2.47073 5.26363 2.9973 4.66333C3.52388 4.06303 4.26599 3.69468 5.06252 3.63824C5.85904 3.69468 6.60115 4.06303 7.12773 4.66333C7.65431 5.26363 7.92284 6.0474 7.87502 6.84449C7.87502 7.14286 7.99354 7.42901 8.20452 7.63999C8.4155 7.85097 8.70165 7.96949 9.00002 7.96949C9.29839 7.96949 9.58453 7.85097 9.79551 7.63999C10.0065 7.42901 10.125 7.14286 10.125 6.84449C10.0772 6.0474 10.3457 5.26363 10.8723 4.66333C11.3989 4.06303 12.141 3.69468 12.9375 3.63824C13.734 3.69468 14.4762 4.06303 15.0027 4.66333C15.5293 5.26363 15.7978 6.0474 15.75 6.84449C15.75 8.80199 13.6935 11.6482 10.1078 14.6542Z" fill="#212137"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_58643_9286">
                                                                <rect width="18" height="18" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__options">
                                    <div class="room__option room__option--size">1 комн. квартира</div>
                                    <div class="room__option room__option--size">35.7 м2</div>
                                    <div class="room__option room__option--size">7 этаж</div>
                                </div>
                                <div class="room__address">г. Алматы, ул. Губина д. 20</div>
                                <div class="room__btns">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn">Детальнее</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn--no-bg">Показать телефон</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room__overlay">
                                    <div class="room__realtor">
                                        <div class="ls">
                                            <div class="room__realtor__avatar">
                                                <img src="/img/kostova-anastasia.jpg" alt="Kostova Anastasia">
                                            </div>
                                        </div>
                                        <div class="rs">
                                            <div class="room__realtor__info">
                                                <a href="#" class="room__realtor__phone">
                                                    <span>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                                                        </svg>
                                                    </span>
                                                    +7 (812) 424-43-62
                                                </a>
                                                <div class="room__realtor__name">Котова Анастасия</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/components/select.js')}}"></script>
    <script src="{{ asset('libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ asset('js/pages/estate-card.js') }}"></script>
@endsection
