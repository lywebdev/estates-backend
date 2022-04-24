@extends('layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <section id="content" class="page page__about">
        <div class="first-screen">
            <div class="first-screen__bg">
                <img src="{{ asset('img/about.jpg') }}" alt="">
            </div>
            <div class="container-fluid first-screen__main">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first-screen__wrapper first-screen__wrapper--centered">
                                <div class="page__title">
                                    <span class="big">«bugachiev»</span>
                                    <span class="light">лидер рынка недвижимости</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section advantages">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row advantages__row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="advantage">
                                <div class="advantage__title">1&nbsp;500&nbsp;+</div>
                                <div class="advantage__text">
                                    <span>партнеров среди застройщиков и банков</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="advantage">
                                <div class="advantage__title">200&nbsp;+</div>
                                <div class="advantage__text">
                                    <span>офисов в России и за рубежом</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="advantage">
                                <div class="advantage__title">19&nbsp;000&nbsp;+</div>
                                <div class="advantage__text">
                                    <span>профессиональных сотрудников</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="advantage">
                                <div class="advantage__title">1&nbsp;500&nbsp;+</div>
                                <div class="advantage__text">
                                    <span>партнеров среди застройщиков и банков</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about-section">
            <div class="about-section__row">
                <div class="about-section__ls">
                    <div class="about-section__image">
                        <img src="{{ asset('img/director.jpg') }}" alt="about image">
                    </div>
                </div>
                <div class="about-section__rs">
                    <div class="about-section__text">
                        <p>"Мы работаем в сфере недвижимости и строим компанию нового типа - сочетаем инновации, ответственность и человеческое отношение к каждому клиенту.</p>
                        <p>Компания инвестирует в обучение, автоматизацию процессов, исследования и качество услуг. Наши клиенты имеют доступ к огромной базе жилья, экономят деньги за счет эксклюзивных скидок от надежных партнеров и свое время, потому что все этапы сделки можно оформить в едином офисе «Этажей». </p>
                        <p>Мы постоянно развиваемся для того, чтобы делать клиентов счастливыми, а сотрудников и партнеров — успешными!"</p>
                    </div>
                    <div class="about-section__delimiter"></div>
                    <div class="about-section__employee">
                        <span>Ильдар Хусаинов, директор</span>
                        <span>компании «Этажи»</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="section pb-100 task-solution">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Как мы решаем задачи клиента</div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/full-complex.jpg') }}" alt="Полный комплекс услуг">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Полный комплекс услуг</div>
                                    <div class="service-card__description">Компания оказывает все необходимые клиентам услуги на рынке недвижимости. Благодаря глубокой аналитике и исследованию рынка у «Этажей» есть четкое понимание того, что необходимо клиенту.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/fixed-cost.jpg') }}" alt="Фиксированная стоимость услуг">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">
                                        <span>Фиксированная</span>
                                        <span>стоимость услуг</span>
                                    </div>
                                    <div class="service-card__description">Прозрачное ценообразование — в этом «Этажи» изменили привычную, в течение долгих лет, схему непрозрачной работы риэлторского бизнеса.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/office-available.jpg') }}" alt="Доступность офиса">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">
                                        <span>Доступность</span>
                                        <span>офиса</span>
                                    </div>
                                    <div class="service-card__description">Расположение офиса удобно клиентам и сотрудникам компании. Хорошая транспортная развязка позволяет быстро добираться от офиса в любую точку города.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/conclusions.jpg') }}" alt="Выгоды">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Выгоды</div>
                                    <div class="service-card__description">«Этажи» заботятся, чтобы клиенты не допускали лишних трат. Финансовая выгода: полный анализ рынка, скидки на ипотечную ставку и страховые услуги.</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/saving-time.jpg') }}" alt="Экономия времени">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">
                                        <span>Экономия</span>
                                        <span>времени</span>
                                    </div>
                                    <div class="service-card__description">Полный цикл сделки возможен в одном офисе, поскольку в «Этажах» существует интеграция с банками-партнерами и с государственными структурами, что обеспечивает возможность электронной регистрации</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/fixed-cost.jpg') }}" alt="Безопасность">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Безопасность</div>
                                    <div class="service-card__description">«Гарантия безопасности сделки» от «Этажей»: финансовая ответственность компании за результат сделки. В гарантии предусмотрены: безопасные финансовые расчеты, полное юридическое сопровождение до, во время и после сделки.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/office-available.jpg') }}" alt="Доступность офиса">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">
                                        <span>Доступность</span>
                                        <span>офиса</span>
                                    </div>
                                    <div class="service-card__description">Расположение офиса удобно клиентам и сотрудникам компании. Хорошая транспортная развязка позволяет быстро добираться от офиса в любую точку города.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="service-card service-card--estate">
                                <div class="service-card__image">
                                    <img src="{{ asset('img/conclusions.jpg') }}" alt="Выгоды">
                                </div>
                                <div class="service-card__main">
                                    <div class="service-card__name">Выгоды</div>
                                    <div class="service-card__description">«Этажи» заботятся, чтобы клиенты не допускали лишних трат. Финансовая выгода: полный анализ рынка, скидки на ипотечную ставку и страховые услуги.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section company-history">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="company-history__container">
                                <div class="section__title section__title--center">История компании</div>
                                <div class="company-history__map">
                                    <img src="{{ asset('img/company-way.jpg') }}" alt="">
                                </div>
                                <div class="company-history__grid">
                                    <div class="company-history__title">16 октября открылся офис компании «Этажи» в Тюмени</div>
                                    <div class="company-history__text">Название компании родилось благодаря песне группы «Иванушки International». Помните? «Свет, разбиваясь, в стеклах витрины дрожит. И зажигает город свои этажи…» Тогда в новой компании работало 22 человека. Они еще не знали, что через год «Этажи» станут вторыми на рынке недвижимости Тюмени.</div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script src="{{ asset('js/pages/about.js') }}"></script>
@endsection
