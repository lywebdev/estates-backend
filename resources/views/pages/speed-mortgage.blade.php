@extends('layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <section id="content" class="page__hsm">
        <div class="breadcrumbs">
            <div class="breadcrumbs__bg">
                <img src="{{ asset('img/breadcrumbs-photo.jpg') }}" alt="">
            </div>
            <div class="ac-grid">
                <div class="breadcrumbs__path">
                    <a href="{{ route('home') }}" class="breadcrumbs__item breadcrumbs__prev">Главная</a>
                    <span class="breadcrumbs__item breadcrumbs__current">Скоростная ипотека</span>
                </div>
                <div class="breadcrumbs__title">Скоростная ипотека</div>
            </div>
        </div>

        <section class="preview">
            <div class="container-fluid">
                <div class="preview__bg">
                    <img src="{{ asset('img/hsm.jpg') }}" alt="">
                </div>

                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12 preview__wrapper">
                            <h1 class="preview__title">
                                <span>Одна заявка </span>
                                <span>сразу во все банки</span>
                            </h1>
                            <div class="preview__info">
                                <span>Заполните анкету на сайте </span>
                                <span>и получите решение банка за 3 часа</span>
                            </div>
                            <div class="preview__btn">
                                <a href="#" class="btn">Подать заявку онлайн</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section calc-mortgage">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title section__title--column">
                                <span>Узнайте ставку и ежемесячный </span>
                                <span>платеж по ипотеке</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="hsm__mg-s row">
                                <div class="col-lg-3 col-md-6 select-row">
                                    <div class="ec-desc mortgage-selection">
                                        <div class="ec-desc__title">Подобрать ипотеку</div>

                                        <div class="mgg-select__data">
                                            <div class="mgg-select__loan-amount mgg-select__data-item">
                                                <div class="mgg-select__data-item__title">Сумма кредита</div>
                                                <div class="mgg-select__data-item__cost">3 000 000 〒</div>
                                            </div>
                                        </div>

                                        <div class="row gy-4">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-label">Тип недвижимости</div>
                                                <div class="select roomType-select"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="form-label">Стоимость недвижимости</label>
                                                <div class="mgg-input">
                                                    <input type="text" class="input" value="5 000 000">
                                                    <div class="mgg-input__after">〒</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="form-label">Первоначальный взнос</label>
                                                <div class="mgg-input">
                                                    <input type="text" class="input" value="3 000 000">
                                                    <div class="mgg-input__after">〒</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="form-label">Срок кредита</label>
                                                <div class="mgg-input">
                                                    <input type="text" class="input" value="30">
                                                    <div class="mgg-input__after">Лет</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-6">
                                    <div class="mgg-select__banks">

                                        <div class="row gy-4">
                                            <div class="col-lg-6 col-md-12">
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
                                            <div class="col-lg-6 col-md-12">
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

                                            <div class="col-lg-6 col-md-12">
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
                                            <div class="col-lg-6 col-md-12">
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

                                        <div class="mgg-select__banks-btn">
                                            <a href="#" class="btn btn--no-bg">Показать ещё</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section why-service">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Зачем эта услуга вам?</div>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="35" height="44" viewBox="0 0 35 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.9005 7.12473L18.0678 0.131388C17.6711 -0.043753 17.2253 -0.0438389 16.8288 0.131388L0.996087 7.12473C0.393071 7.39114 0 8.01745 0 8.71208V17.2135C0 28.9193 6.65046 39.4489 16.8377 43.8726C17.229 44.0425 17.6674 44.0425 18.0588 43.8726C28.2459 39.449 34.8966 28.9194 34.8966 17.2135V8.71208C34.8966 8.01745 34.5036 7.39114 33.9005 7.12473ZM31.6654 17.2135C31.6654 27.1646 26.1724 36.3253 17.4483 40.4144C8.95727 36.4345 3.23116 27.4343 3.23116 17.2135V9.85952L17.4483 3.57972L31.6654 9.85952V17.2135ZM15.6626 23.0068L22.6067 15.6194C23.2376 14.9482 24.2605 14.9481 24.8914 15.6194C25.5224 16.2907 25.5223 17.3789 24.8913 18.0501L16.805 26.6528C16.1739 27.3242 15.151 27.3239 14.5202 26.6528L10.0051 21.8494C9.37417 21.1782 9.37417 20.09 10.0051 19.4188C10.6361 18.7476 11.659 18.7475 12.2899 19.4188L15.6626 23.0068Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Одна анкета</span>
                                        <span>во все банки</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Более 60 банков-партнеров в России. Оформим ипотеку на самых выгодных условиях, достаточно заполнить анкету 1 раз.</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="45" height="40" viewBox="0 0 45 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M43.5757 13.719C42.7567 12.682 41.5357 12.0872 40.2257 12.0872H32.5252L34.3879 5.58722C35.1922 2.7807 33.1163 0 30.2563 0C29.0001 0 27.8103 0.554696 26.9919 1.522L18.2964 11.8C18.142 11.9825 17.9223 12.0872 17.6939 12.0872H13.6917V11.2177C13.6917 10.2571 12.913 9.47852 11.9525 9.47852H1.73913C0.778609 9.47852 0 10.2571 0 11.2177V38.2609C0 39.2214 0.778609 40 1.73913 40H11.9526C12.9131 40 13.6917 39.2214 13.6917 38.2609V37.3913H36.2769C38.267 37.3913 39.9833 36.0201 40.4507 34.0568L44.3997 17.4691C44.7143 16.1471 44.4141 14.7803 43.5757 13.719ZM10.2135 36.5217H3.47817V12.9568H10.2135C10.2135 13.5611 10.2135 35.9524 10.2135 36.5217ZM41.016 16.6637L37.067 33.2513C36.9743 33.641 36.6493 33.9131 36.2768 33.9131H13.6917V15.5655H17.6939C18.9477 15.5655 20.135 15.0119 20.9517 14.0466L29.6471 3.76861C30.2351 3.07348 31.3042 3.722 31.0443 4.62896L29.027 11.6686C28.4663 13.6245 29.9186 15.5655 31.9244 15.5655H40.2257C40.553 15.5655 40.755 15.7593 40.8463 15.875C41.0209 16.0959 41.0828 16.3834 41.016 16.6637Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Решение</span>
                                        <span>банка за 3 часа</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Проверим и отправим анкету в банки, вы получите ответ через 3 часа. Решение банка действует в течение 60 дней</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="36" height="44" viewBox="0 0 36 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.1875 28.7604C26.1875 29.7097 25.4445 30.4792 24.5279 30.4792H11.4721C10.5555 30.4792 9.81251 29.7097 9.81251 28.7604C9.81251 27.8112 10.5555 27.0417 11.4721 27.0417H24.5279C25.4445 27.0417 26.1875 27.8112 26.1875 28.7604ZM24.5279 16.9011H11.4721C10.5555 16.9011 9.81251 17.6706 9.81251 18.6198C9.81251 19.5691 10.5555 20.3386 11.4721 20.3386H24.5279C25.4445 20.3386 26.1875 19.5691 26.1875 18.6198C26.1875 17.6706 25.4445 16.9011 24.5279 16.9011ZM36 6.875V37.125C36 40.9159 33.022 44 29.3615 44H6.63848C2.97802 44 0 40.9159 0 37.125V6.875C0 3.08413 2.97802 0 6.63848 0H29.3615C33.022 0 36 3.08413 36 6.875ZM13.1318 5.0417C13.1318 5.98941 13.8763 6.76045 14.7914 6.76045H21.2086C22.1237 6.76045 22.8682 5.98941 22.8682 5.0417V3.4375H13.1318V5.0417ZM32.6808 6.875C32.6808 4.97956 31.1917 3.4375 29.3615 3.4375H26.1875V5.0417C26.1875 7.88485 23.954 10.1979 21.2086 10.1979H14.7914C12.046 10.1979 9.81251 7.88485 9.81251 5.0417V3.4375H6.63848C4.80825 3.4375 3.31924 4.97956 3.31924 6.875V37.125C3.31924 39.0204 4.80825 40.5625 6.63848 40.5625H29.3615C31.1917 40.5625 32.6808 39.0204 32.6808 37.125V6.875Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Оформление</span>
                                        <span>ипотеки бесплатно</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Сервис по оформлению ипотеки - бесплатный. Снизим переплату по кредиту, проверим документы и увеличим шансы на одобрение.</div>
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
                                        <span>С нами ипотека</span>
                                        <span>дешевле, чем в банке</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Для клиентов компании «Этажи» действуют специальные условия от банков-партнеров. Скидка до 1,4% от стандартных условий кредитования.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section steps-to-mg">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section__title">Как получить ипотеку</div>
                        </div>
                    </div>

                    <div class="steps-to-mg__steps">

                        <div class="steps-to-mg__step">
                            <div class="ts">
                                <div class="steps-to-mg__step-number">1</div>
                                <div class="path">
                                    <div class="dot dot--left"></div>
                                    <div class="line"></div>
                                    <div class="dot dot--right"></div>
                                </div>
                            </div>
                            <div class="steps-to-mg__step-info">Заполните анкету на сайте или в мобильном приложении «Этажи», загрузите документы. Нажмите «Отправить».</div>
                        </div>
                        <div class="steps-to-mg__step">
                            <div class="ts">
                                <div class="steps-to-mg__step-number">2</div>
                                <div class="path">
                                    <div class="dot dot--left"></div>
                                    <div class="line"></div>
                                    <div class="dot dot--right"></div>
                                </div>
                            </div>
                            <div class="steps-to-mg__step-info">Эксперт по ипотеке проверит анкету и запросит недостающие данные. Затем отправит заявку сразу в несколько банков.</div>
                        </div>
                        <div class="steps-to-mg__step">
                            <div class="ts">
                                <div class="steps-to-mg__step-number">3</div>
                                <div class="path">
                                    <div class="dot dot--left"></div>
                                    <div class="line"></div>
                                    <div class="dot dot--right"></div>
                                </div>
                            </div>
                            <div class="steps-to-mg__step-info">Отслеживайте статус заявки в личном кабинете на сайте или в мобильном приложении «Этажи».</div>
                        </div>
                        <div class="steps-to-mg__step">
                            <div class="ts">
                                <div class="steps-to-mg__step-number">4</div>
                                <div class="path">
                                    <div class="dot dot--left"></div>
                                    <div class="line"></div>
                                    <div class="dot dot--right"></div>
                                </div>
                            </div>
                            <div class="steps-to-mg__step-info">После проверки заявки банками, в личном кабинете появится информация о статусах и решениях по каждому банку.</div>
                        </div>
                        <div class="steps-to-mg__step">
                            <div class="ts">
                                <div class="steps-to-mg__step-number">5</div>
                                <div class="path">
                                    <div class="dot dot--left"></div>
                                    <div class="line"></div>
                                    <div class="dot dot--right"></div>
                                </div>
                            </div>
                            <div class="steps-to-mg__step-info">Специалисты помогут выбрать недвижимость, проверят через банк, оформят оценку и страховку, зарегистрируют сделку.</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/components/select.js')}}"></script>

    <script src="{{ asset('js/pages/hsm.js') }}"></script>
@endsection
