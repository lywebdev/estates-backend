@extends('layouts.app')

@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <section id="content" class="page__buildings">
        <div class="first-screen">
            <div class="breadcrumbs">
                <div class="breadcrumbs__bg">
                    <img src="{{ asset('img/buildings-breadcrumbs-bg.jpg') }}" alt="">
                </div>
                <div class="ac-grid">
                    {{ Breadcrumbs::view('components.breadcrumbs.breadcrumbs', 'buildings.category', $esCategory) }}
                    <div class="breadcrumbs__title">{{ $esCategory->name }}</div>
                </div>

                <div class="container-fluid first-screen__main">
                    <div class="ac-grid">
                        <div class="row">
                            <div class="first-screen__options col-md-12">
                                @include('components.ajax.filters.form', ['type' => 'ajax'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="main">
            <div class="container-fluid">
                <div class="ac-grid">
                    @include('components.ajax.estates.main-container', ['estates' => $estates])
                </div>
            </div>
        </section>

        <!-- Баннер -->
        <div class="feedback-banner">
            <div class="feedback-banner__bg">
                <img src="{{ asset('img/feedback-banner__bg.jpg') }}" alt="banner">
            </div>
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="feedback-banner__main">
                        <div class="feedback-banner__info">
                            <div class="feedback-banner__title">
                                <span>Подайте заявку на</span>
                                <span>оценку имущества</span>
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
    <script src="{{ asset('libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('js/pages/buildings.js') }}"></script>

    <script src="{{ asset('js/components/ajax/filters.js') }}"></script>
@endsection
