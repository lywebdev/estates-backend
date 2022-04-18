@extends('layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <section id="content" class="page page__sale">

        <div class="first-screen">
            <div class="first-screen__bg">
                <img src="{{ asset('img/page-sale__bg.jpg') }}" alt="">
            </div>
            <div class="container-fluid first-screen__main">
                <div class="ac-grid">
                    <div class="first-screen__wrapper">
                        <div class="page__title">Поможем продать недвижимость быстро и выгодно</div>
                        <div class="first-screen__form">
                            <div class="first-screen__form-row jc-sb">
                                <input type="text" class="input" placeholder="Ваше имя">
                                <input type="text" class="input" placeholder="+7 XXX XXX XX XX">
                            </div>
                            <div class="first-screen__form-row">
                                <button type="submit" class="btn">Получить бесплатную консультацию</button>
                            </div>
                            <div class="first-screen__form-row">
                                <div class="agreement">Отправляя заявку, вы соглашаетесь на обработку <a href="#" class="color--red">персональных данных</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section how-it-work">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Как это работает</div>
                        </div>
                    </div>
                    <div class="row gy-4">

                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <span>1</span>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Размещение</span>
                                        <span>объявления</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Добавьте объявление о своей недвижимости, и через 2 часа покупатели увидят его на сайте. Или просто оставьте свой телефон и мы всё сделаем.</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <span>2</span>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Подготовка</span>
                                        <span>к продаже</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">
                                    <p>Профессиональная фотосъемка и отрисовка планировки недвижимости в подарок!</p>
                                    <p>Фотограф компании приедет, сделает фото вашей недвижимости, обработает и загрузит в ваше объявление бесплатно.</p>
                                    <p>Подписание агентского договора в офисе или онлайн.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <span>3</span>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Поиск</span>
                                        <span>покупателей</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">
                                    <p>Мы разместим ваше объявление во всех популярных агрегаторах ЦИАН, Авито, Яндекс.Недвижимость.</p>
                                    <p>Специалист по недвижимости проведет личные или онлайн показы вашего объекта для заинтересованных покупателей.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <span>4</span>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Заключение</span>
                                        <span>сделки</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">
                                    <p>Берём на себя весь процесс подготовки документов
                                        и проведения сделки.</p>
                                    <p>Передаёте задаток в офисе или полностью удаленно.</p>
                                    <p>Оплачиваете услуги компании наличными или онлайн.
                                        Проводим сделку , регистрируем право собственности в МФЦ или через электронную регистрацию.
                                        Передаем ключи.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="section info-banner">
            <div class="info-banner__bg">
                <img src="{{ asset('img/info-banner__bg.jpg') }}" alt="banner bg">
            </div>
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="info-banner__wrapper">
                                <div class="info-banner__title">
                                    <span>Начните</span>
                                    <span>продавать</span>
                                    <span>прямо сейчас</span>
                                </div>
                                <div class="info-banner__text">
                                    <p>Разместите объявление о продаже или узнайте </p>
                                    <p>рыночную стоимость недвижимости</p>
                                </div>
                                <div class="info-banner__btns">
                                    <a href="#" class="btn">Добавить объявление</a>
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
@endsection
