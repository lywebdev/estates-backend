@extends('layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <section id="content" class="page page__franchise">

        <div class="first-screen">
            <div class="first-screen__bg">
                <img src="/img/franchise-bg.jpg" alt="">
            </div>
            <div class="container-fluid first-screen__main">
                <div class="ac-grid">
                    <div class="first-screen__wrapper">
                        <div class="page__title">
                            <span>Франшиза №1 в сфере </span>
                            <span>недвижимости</span>
                        </div>
                        <div class="page__text">
                            <span>Раскройте свой потенциал</span>
                        </div>
                        <div class="first-screen__form">
                            <div class="first-screen__form-row jc-sb">
                                <input type="text" class="input" placeholder="Ваше имя">
                                <input type="text" class="input" placeholder="+7 XXX XXX XX XX">
                            </div>
                            <div class="first-screen__form-row">
                                <button type="submit" class="btn">Отправить</button>
                            </div>
                            <div class="first-screen__form-row">
                                <div class="agreement">Отправляя заявку, вы соглашаетесь на обработку <a href="#" class="color--red">персональных данных</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="conditions">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section safely">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section__title section__title--column">
                                <span>С нами</span>
                                <span>Надёжно!</span>
                            </div>

                            <div class="stats">
                                <div class="stats__row">
                                    <div class="stat-item stat-item--countries">
                                        <div class="high">7</div>
                                        <div class="text">стран</div>
                                    </div>
                                    <div class="stat-item stat-item--cities">
                                        <div class="high">200</div>
                                        <div class="text">городов</div>
                                    </div>
                                </div>
                                <div class="stats__row f jc-c">
                                    <div class="stat-item stat-item__employee">
                                        <div class="stat-item__container">
                                            <div class="high">19 000+</div>
                                            <div class="text">сотрудников</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="safely-map">
                                <img src="/img/safely-map.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section what-you-get">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Что вы получите?</div>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="39" height="46" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.0405 20.5486C28.8469 18.4846 30.6763 15.1306 30.6763 11.3505C30.6763 5.09196 25.6625 0 19.5 0C13.3372 0 8.32367 5.09196 8.32367 11.3505C8.32367 15.1306 10.1531 18.4846 12.9595 20.5486C5.94341 23.7549 0 32.535 0 44.2031C0 45.1956 0.79204 46 1.7693 46H37.2307C38.2076 46 39 45.1956 39 44.2031C39 32.4764 33.0117 23.7345 26.0405 20.5486ZM22.3316 26.3397L21.3274 28.3141H17.6726L16.6684 26.3397L18.4636 22.7473C19.1724 22.6859 19.8269 22.6859 20.536 22.7473L22.3316 26.3397ZM11.8623 11.3505C11.8623 7.07344 15.2886 3.59375 19.5 3.59375C23.7114 3.59375 27.1377 7.07344 27.1377 11.3505C27.1377 15.6275 23.7114 19.1072 19.5 19.1072C15.2882 19.1072 11.8623 15.6275 11.8623 11.3505ZM13.813 24.1125L13.1029 25.5335C12.8458 26.0487 12.8478 26.658 13.1087 27.1714L14.7198 30.3395L11.8371 42.4062H3.5939C4.11087 34.029 8.20825 27.0012 13.813 24.1125ZM15.4783 42.4062L17.9864 31.9079H21.0136L23.5214 42.4062H15.4783ZM27.1629 42.4062L24.2802 30.3395L25.8913 27.1714C26.1522 26.658 26.1542 26.0487 25.8968 25.5335L25.1867 24.1125C30.7917 27.0012 34.8891 34.029 35.4061 42.4062H27.1629Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Размещение</span>
                                        <span>объявления</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Добавьте объявление о своей недвижимости, и через 2 часа покупатели увидят его на сайте. Или просто оставьте свой телефон и мы всё сделаем.</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="35" height="44" viewBox="0 0 35 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.9005 7.12473L18.0678 0.131388C17.6711 -0.043753 17.2253 -0.0438389 16.8288 0.131388L0.996087 7.12473C0.393071 7.39114 0 8.01745 0 8.71208V17.2135C0 28.9193 6.65046 39.4489 16.8377 43.8726C17.229 44.0425 17.6674 44.0425 18.0588 43.8726C28.2459 39.449 34.8966 28.9194 34.8966 17.2135V8.71208C34.8966 8.01745 34.5036 7.39114 33.9005 7.12473ZM31.6654 17.2135C31.6654 27.1646 26.1724 36.3253 17.4483 40.4144C8.95727 36.4345 3.23116 27.4343 3.23116 17.2135V9.85952L17.4483 3.57972L31.6654 9.85952V17.2135ZM15.6626 23.0068L22.6067 15.6194C23.2376 14.9482 24.2605 14.9481 24.8914 15.6194C25.5224 16.2907 25.5223 17.3789 24.8913 18.0501L16.805 26.6528C16.1739 27.3242 15.151 27.3239 14.5202 26.6528L10.0051 21.8494C9.37417 21.1782 9.37417 20.09 10.0051 19.4188C10.6361 18.7476 11.659 18.7475 12.2899 19.4188L15.6626 23.0068Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Размещение</span>
                                        <span>объявления</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Добавьте объявление о своей недвижимости, и через 2 часа покупатели увидят его на сайте. Или просто оставьте свой телефон и мы всё сделаем.</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.002 43.9958C10.1777 44.2399 -0.240335 33.8208 0.00422089 21.9951C0.0884319 19.7172 3.35762 19.719 3.44123 21.9953C3.34293 38.7166 24.3818 46.9374 35.6202 34.6091L33.3306 32.3127C32.8692 31.8499 32.7101 31.1652 32.9205 30.5463C33.1307 29.9273 33.6738 29.4812 34.3218 29.3953L42.0555 28.3697C42.5865 28.2991 43.1199 28.4804 43.4981 28.8597C43.8763 29.2389 44.0562 29.7728 43.9845 30.3036L42.9396 38.0382C42.766 39.4332 41.0008 40.0272 40.0195 39.0217L38.0489 37.0452C33.895 41.4821 28.1347 43.9958 22.002 43.9958ZM22.088 33.1674C15.9283 33.1674 10.9171 28.1556 10.9171 21.9953C11.4787 7.19425 32.6995 7.19829 33.2588 21.9954C33.2588 28.1556 28.2476 33.1674 22.088 33.1674ZM22.088 14.2607C17.8236 14.2607 14.3543 17.7304 14.3543 21.9953C14.7431 32.2421 29.4344 32.2393 29.8216 21.9952C29.8216 17.7304 26.3523 14.2607 22.088 14.2607ZM42.2814 23.7141C41.3322 23.7141 40.5628 22.9446 40.5628 21.9953C40.6601 5.27341 19.6231 -2.94679 8.38382 9.38132L10.6734 11.6777C11.1349 12.1406 11.2939 12.8253 11.0836 13.4442C10.8734 14.0631 10.3302 14.5092 9.68221 14.5952L1.94855 15.6208C1.41733 15.691 0.88414 15.5099 0.505964 15.1308C0.127702 14.7515 -0.0521489 14.2177 0.0195164 13.6868L1.06442 5.95225C1.15207 5.30427 1.59959 4.76216 2.21914 4.5535C2.83904 4.34475 3.52295 4.5058 3.98465 4.96884L5.95519 6.94537C19.5717 -7.51783 43.9599 2.10989 43.9999 21.9954C44 22.9446 43.2306 23.7141 42.2814 23.7141ZM25.4392 23.7141H22.0095C21.0603 23.7141 20.2909 22.9446 20.2909 21.9953V18.5577C20.3754 16.2796 23.6444 16.2813 23.7281 18.5577V20.2765H25.4392C27.717 20.361 27.7153 23.6304 25.4392 23.7141Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Размещение</span>
                                        <span>объявления</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Добавьте объявление о своей недвижимости, и через 2 часа покупатели увидят его на сайте. Или просто оставьте свой телефон и мы всё сделаем.</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="39" height="45" viewBox="0 0 39 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.7577 27.0446C30.418 26.1935 30.9696 25.2579 31.3929 24.2578H33.6601C36.6044 24.2578 39 21.9184 39 19.0431C39 16.7579 37.4869 14.813 35.388 14.1099C34.6241 6.20556 27.7907 0 19.5002 0C11.2096 0 4.37591 6.20556 3.61196 14.1099C1.51348 14.813 0 16.7579 0 19.0431C0 21.9184 2.39555 24.2578 5.34025 24.2578H7.60713C8.03041 25.2579 8.58202 26.1935 9.24226 27.0446C3.62357 30.4404 0 36.4877 0 43.2422C0 44.2131 0.805784 45 1.80001 45H37.2C38.1942 45 39 44.2131 39 43.2422C39.0004 36.4921 35.3796 30.4421 29.7577 27.0446ZM33.6601 20.7422H32.2974C32.4113 19.6377 32.379 18.4958 32.1765 17.3436H33.6601C34.6195 17.3436 35.4 18.1062 35.4 19.0431C35.4003 19.98 34.6195 20.7422 33.6601 20.7422ZM19.5002 3.51562C25.7042 3.51562 30.8543 8.00285 31.7286 13.828H30.9872C26.2249 4.62662 12.7807 4.61632 8.01284 13.828H7.27174C8.14573 8.00285 13.2961 3.51562 19.5002 3.51562ZM5.34025 20.7422C4.38083 20.7422 3.60001 19.98 3.60001 19.0431C3.60001 18.1062 4.38083 17.3436 5.34025 17.3436H6.8235C6.6319 18.4357 6.58268 19.577 6.70256 20.7422H5.34025ZM19.5002 20.7422H10.3289C9.5446 15.3029 13.8762 10.4298 19.5002 10.4298C25.7446 10.4298 30.1213 16.3501 28.3958 21.9967C26.1623 29.4993 15.8886 30.8884 11.6417 24.2578H19.5002C20.4944 24.2578 21.3002 23.4709 21.3002 22.5C21.3002 21.5291 20.4944 20.7422 19.5002 20.7422ZM3.70091 41.4844C4.29013 36.3891 7.41237 31.9891 11.8994 29.6016C16.4254 32.8502 22.5778 32.8481 27.101 29.6016C31.5848 31.9874 34.7095 36.3857 35.2991 41.4844H3.70091Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Размещение</span>
                                        <span>объявления</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Добавьте объявление о своей недвижимости, и через 2 часа покупатели увидят его на сайте. Или просто оставьте свой телефон и мы всё сделаем.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section office-slider slider-component">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Как будет выглядеть ваш офис</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="office-slider__container slider-component__container">

                <div class="swiper">

                    <div class="slider-nav">
                        <div class="slider-nav__prev slider-nav__btn">
                            <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.073 1.12506C10.0732 1.27274 10.0433 1.41899 9.98514 1.55539C9.92695 1.69178 9.84157 1.81561 9.73393 1.91974L3.82197 7.67219C3.64302 7.84623 3.50107 8.05287 3.40423 8.2803C3.30738 8.50772 3.25754 8.75148 3.25754 8.99766C3.25754 9.24383 3.30738 9.48759 3.40423 9.71502C3.50107 9.94244 3.64302 10.1491 3.82197 10.3231L9.72622 16.0666C9.83662 16.1703 9.92468 16.2944 9.98526 16.4316C10.0458 16.5688 10.0777 16.7164 10.0791 16.8657C10.0804 17.015 10.0511 17.1631 9.99303 17.3013C9.93491 17.4395 9.84908 17.565 9.74055 17.6706C9.63202 17.7762 9.50296 17.8597 9.36091 17.9163C9.21886 17.9728 9.06665 18.0013 8.91317 18C8.7597 17.9987 8.60802 17.9676 8.467 17.9087C8.32597 17.8498 8.19843 17.7641 8.0918 17.6567L2.18755 11.9132C1.3937 11.1395 0.947854 10.0909 0.947854 8.99766C0.947854 7.90441 1.3937 6.85583 2.18755 6.08207L8.09951 0.329628C8.26116 0.172254 8.46717 0.0650694 8.69146 0.0216363C8.91575 -0.0217969 9.14824 0.000473761 9.35951 0.0856303C9.57079 0.170787 9.75135 0.315002 9.87835 0.500027C10.0054 0.685052 10.0731 0.902571 10.073 1.12506Z" fill="#212137"/>
                            </svg>
                        </div>
                        <div class="slider-nav__next slider-nav__btn">
                            <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.073 1.12506C10.0732 1.27274 10.0433 1.41899 9.98514 1.55539C9.92695 1.69178 9.84157 1.81561 9.73393 1.91974L3.82197 7.67219C3.64302 7.84623 3.50107 8.05287 3.40423 8.2803C3.30738 8.50772 3.25754 8.75148 3.25754 8.99766C3.25754 9.24383 3.30738 9.48759 3.40423 9.71502C3.50107 9.94244 3.64302 10.1491 3.82197 10.3231L9.72622 16.0666C9.83662 16.1703 9.92468 16.2944 9.98526 16.4316C10.0458 16.5688 10.0777 16.7164 10.0791 16.8657C10.0804 17.015 10.0511 17.1631 9.99303 17.3013C9.93491 17.4395 9.84908 17.565 9.74055 17.6706C9.63202 17.7762 9.50296 17.8597 9.36091 17.9163C9.21886 17.9728 9.06665 18.0013 8.91317 18C8.7597 17.9987 8.60802 17.9676 8.467 17.9087C8.32597 17.8498 8.19843 17.7641 8.0918 17.6567L2.18755 11.9132C1.3937 11.1395 0.947854 10.0909 0.947854 8.99766C0.947854 7.90441 1.3937 6.85583 2.18755 6.08207L8.09951 0.329628C8.26116 0.172254 8.46717 0.0650694 8.69146 0.0216363C8.91575 -0.0217969 9.14824 0.000473761 9.35951 0.0856303C9.57079 0.170787 9.75135 0.315002 9.87835 0.500027C10.0054 0.685052 10.0731 0.902571 10.073 1.12506Z" fill="#212137"/>
                            </svg>
                        </div>
                    </div>

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="/img/office/1.jpg" alt="img">
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="section statistic">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title section__title--column">
                                <span>70% всех сделок в России проходит с </span>
                                <span>риэлтором, а значит с каждым годом </span>
                                <span>у вас будет расти число клиентов</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="statistic__image">
                                <img src="/img/franchise-statistic-image.jpg" alt="">
                            </div>
                        </div>
                    </div>
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
                                <span>Хотите</span>
                                <span>сотрудничать ?</span>
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
    <script src="{{ asset('js/pages/franchise.js') }}"></script>
@endsection
