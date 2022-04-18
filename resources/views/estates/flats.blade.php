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
                                <form class="first-screen__filters"
                                      data-route="{{ url()->current() }}"
                                      data-slug="{{ $esCategory->slug }}"
                                      method="get">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-input">
                                                        <div class="form-label">Район</div>
                                                        <div class="select district-select"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-input">
                                                        <div class="form-label">Город</div>
                                                        <div class="select city-select"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-input">
                                                        <div class="form-label">Комнатность</div>
                                                        <div class="select roomSize-select"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6 first-screen__filters--cost">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-label">Стоимость,</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" class="input" name="cost_to" placeholder="От">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" class="input" name="cost_from" placeholder="До">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 first-screen__filters--area">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-label">Площадь, м2</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" class="input" name="area_to" placeholder="От">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="text" class="input" name="area_from" placeholder="До">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn first-screen__filters__btn">Показать предложения</div>
                                        </div>
                                    </div>
                                </form>
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
                <img src="/img/feedback-banner__bg.jpg" alt="banner">
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
@endsection
