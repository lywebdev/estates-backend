@extends('layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <div id="content" class="page page__prop-valuation">

        <div class="first-screen">
            <div class="first-screen__bg">
                <img src="{{ asset('img/page-sale__bg.jpg') }}" alt="">
            </div>
            <div class="container-fluid first-screen__main">
                <div class="ac-grid">
                    <div class="first-screen__wrapper">
                        <div class="page__title">
                            <span>Оценка всех видов</span>
                            <span>имущества за 1 день</span>
                        </div>
                        <div class="page__text">
                            <span>Услуги по оценке предоставляет компания «Бизнес </span>
                            <span>Стандарт» - официальный партнер компании «Этажи»</span>
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

        <section class="section why-trust">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Почему нам доверяют?</div>
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
                                        <span>Сертифицированные</span>
                                        <span>специалисты</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Гарантируем качество услуги, проводим регулярное обучение и повышение квалификации оценщиков</div>
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
                                        <span>Надежность и</span>
                                        <span>конфиденциальность</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Отчеты готовим в соответствии с законодательством РФ, поэтому они имеют юридическую силу при решении споров</div>
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
                                        <span>Максимально</span>
                                        <span>короткие сроки</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Готовим отчет от 1-го дня, с минимальными данными подскажем диапазон стоимости объекта</div>
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
                                        <span>Бесплатные</span>
                                        <span>консультации</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Проконсультируем по вопросам с документами и подскажем, где получить недостающие</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section types-eval-in-company">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Виды оценки компании</div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/estimation/estates.jpg') }}" alt="Недвижимость">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Недвижимость</div>
                                    <div class="service-card__description">(квартира, дача, дом, участок)</div>
                                    <div class="service-card__days">от 1 дня</div>
                                    <div class="service-card__cost">от 2 500 〒</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/estimation/movable-property.jpg') }}" alt="2">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Движимое имущество</div>
                                    <div class="service-card__description">(все виды транспорта, спецтехника)</div>
                                    <div class="service-card__days">от 1 дня</div>
                                    <div class="service-card__cost">от 2 500 〒</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/estimation/business-valuation.jpg') }}" alt="2">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Оценка бизнеса</div>
                                    <div class="service-card__description">(все виды транспорта, спецтехника)</div>
                                    <div class="service-card__days">от 10 дней</div>
                                    <div class="service-card__cost">от 40 000 〒</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/estimation/non-resident-premises.jpg') }}" alt="2">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Нежилые помещения и здания</div>
{{--                                    <div class="service-card__description">(квартира, дача, дом, участок)</div>--}}
                                    <div class="service-card__days">от 7 дня</div>
                                    <div class="service-card__cost">от 10 000 〒</div>
                                </div>
                            </a>
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

    </div>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/components/select.js')}}"></script>
    <script src="{{ asset('libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ asset('js/pages/prop-valuation.js') }}"></script>
@endsection
