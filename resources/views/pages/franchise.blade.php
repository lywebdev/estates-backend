@extends('layouts.app')


@section('ext_styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
@endsection

@section('content')
    <section id="content" class="page page__franchise">

        <div class="first-screen">
            <div class="first-screen__bg">
                <img src="{{ asset('img/franchise-bg.jpg') }}" alt="">
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
                                <div class="condition-item__title">От&nbsp;4%</div>
                                <div class="condition-item__info">Роялти от выручки</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">О&nbsp;〒</div>
                                <div class="condition-item__info">Паушальный взнос</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 15 мес.</div>
                                <div class="condition-item__info">Окупаемость</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 6 мес.</div>
                                <div class="condition-item__info">Безубыточность</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="condition-item">
                                <div class="condition-item__title">От 700 тыс.</div>
                                <div class="condition-item__info">Инвестиции</div>
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
                                <img src="{{ asset('img/safely-map.png') }}" alt="">
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
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M42.2812 0H1.71875C0.769484 0 0 0.769484 0 1.71875V33.5156C0 34.4649 0.769484 35.2344 1.71875 35.2344H14.6109L10.4423 41.3088C9.66058 42.4476 10.4784 44 11.8594 44H32.1406C33.522 44 34.3392 42.4474 33.5577 41.3088L29.3891 35.2344H42.2812C43.2305 35.2344 44 34.4649 44 33.5156C44 32.9237 44 2.72138 44 1.71875C44 0.769484 43.2305 0 42.2812 0ZM15.1235 40.5625L18.78 35.2344H25.22L28.8765 40.5625H15.1235ZM40.5625 31.7969C39.4847 31.7969 4.51447 31.7969 3.4375 31.7969V28.3594H40.5625V31.7969ZM40.5625 24.9219H3.4375V3.4375H40.5625V24.9219ZM15.674 17.832C16.1509 18.6581 17.2036 18.9336 18.0218 18.4611L18.6526 18.0969C19.1287 18.5043 19.6793 18.8268 20.2812 19.0403V19.7656C20.2812 20.7149 21.0507 21.4844 22 21.4844C22.9493 21.4844 23.7188 20.7149 23.7188 19.7656V19.0403C24.3207 18.8268 24.8713 18.5044 25.3474 18.0969L25.9782 18.4611C26.7975 18.934 27.8499 18.6569 28.326 17.832C28.8007 17.01 28.519 15.9588 27.697 15.4842L27.0686 15.1214C27.1251 14.8158 27.1562 14.5014 27.1562 14.1797C27.1562 13.8579 27.1251 13.5436 27.0685 13.238L27.6969 12.8752C28.519 12.4006 28.8006 11.3493 28.3259 10.5273C27.8513 9.70518 26.8001 9.42365 25.9781 9.89828L25.3473 10.2625C24.8712 9.85505 24.3207 9.53262 23.7187 9.31906V8.59375C23.7187 7.64448 22.9492 6.875 21.9999 6.875C21.0506 6.875 20.2812 7.64448 20.2812 8.59375V9.31906C19.6792 9.53253 19.1287 9.85497 18.6526 10.2625L18.0217 9.89828C17.1996 9.42382 16.1484 9.70527 15.6739 10.5273C15.1992 11.3493 15.4809 12.4006 16.3029 12.8752L16.9313 13.238C16.8749 13.5436 16.8438 13.8579 16.8438 14.1797C16.8438 14.5014 16.8749 14.8158 16.9315 15.1214L16.3031 15.4842C15.481 15.9588 15.1993 17.01 15.674 17.832ZM22 12.4609C22.9477 12.4609 23.7188 13.232 23.7188 14.1797C23.7188 15.1274 22.9477 15.8984 22 15.8984C21.0523 15.8984 20.2812 15.1274 20.2812 14.1797C20.2812 13.232 21.0523 12.4609 22 12.4609Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>IT-поддержка</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">CRM, сайт, BI... Мы автоматизировали все процессы, чтобы вы могли сконцентрироваться на развитии бизнеса</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M43.4968 36.2045L30.2654 22.9735C31.3101 20.8526 31.8982 18.4685 31.8982 15.9491C31.8982 7.15463 24.7436 0 15.9491 0C7.15463 0 0 7.15463 0 15.9491C0 24.7007 7.11166 31.8983 15.9491 31.8983C18.4685 31.8983 20.8526 31.3101 22.9732 30.2654L36.2045 43.4965C36.8755 44.1678 37.9639 44.1678 38.6352 43.4965L43.4964 38.6353C44.1678 37.9642 44.1678 36.8759 43.4968 36.2045ZM15.9491 28.4608C12.5976 28.4608 9.54946 27.1358 7.30132 24.9826C8.30102 22.7429 10.1383 20.9694 12.4166 20.055C13.4744 20.6072 14.6758 20.9197 15.9491 20.9197C17.2224 20.9197 18.4238 20.6072 19.4816 20.055C21.76 20.9694 23.5972 22.7429 24.5969 24.9823C22.3484 27.1358 19.3007 28.4608 15.9491 28.4608ZM11.7251 13.2572C11.7251 10.9278 13.6197 9.03284 15.9491 9.03284C18.2785 9.03284 20.1735 10.9278 20.1735 13.2572C20.1735 15.5869 18.2785 17.4822 15.9491 17.4822C13.6197 17.4822 11.7251 15.5869 11.7251 13.2572ZM22.2679 17.5856C23.1145 16.3533 23.611 14.8622 23.611 13.2572C23.611 9.0325 20.1738 5.59534 15.9491 5.59534C11.7244 5.59534 8.28759 9.0325 8.28759 13.2572C8.28759 14.8622 8.78374 16.3533 9.6307 17.5856C7.74242 18.6464 6.14956 20.1688 5.00283 22.0027C4.00616 20.2077 3.4375 18.1439 3.4375 15.9491C3.4375 9.05029 9.05028 3.4375 15.9491 3.4375C22.8479 3.4375 28.4607 9.05029 28.4607 15.9491C28.4607 18.1439 27.8921 20.2077 26.8954 22.0027C25.7483 20.1688 24.1561 18.6464 22.2679 17.5856ZM37.42 39.8505L25.9403 28.3711C26.7974 27.6803 27.6097 26.8847 28.3708 25.9404L39.8505 37.4201L37.42 39.8505Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>HR</span>
                                        <span>экосистема</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Помощь в формировании сильной команды на старте, найме и адаптации на этапе развития. Обучение вас и ваших сотрудников бесплатно</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.1406 9.96875C34.889 9.96875 37.125 7.73274 37.125 4.98438C37.125 2.23601 34.889 0 32.1406 0C29.3923 0 27.1562 2.23601 27.1562 4.98438C27.1562 7.73274 29.3923 9.96875 32.1406 9.96875ZM32.1406 3.4375C32.9936 3.4375 33.6875 4.13145 33.6875 4.98438C33.6875 5.8373 32.9936 6.53125 32.1406 6.53125C31.2877 6.53125 30.5938 5.8373 30.5938 4.98438C30.5938 4.13145 31.2877 3.4375 32.1406 3.4375ZM11.8594 9.96875C14.6077 9.96875 16.8438 7.73274 16.8438 4.98438C16.8438 2.23601 14.6077 0 11.8594 0C9.11101 0 6.875 2.23601 6.875 4.98438C6.875 7.73274 9.11101 9.96875 11.8594 9.96875ZM11.8594 3.4375C12.7123 3.4375 13.4062 4.13145 13.4062 4.98438C13.4062 5.8373 12.7123 6.53125 11.8594 6.53125C11.0064 6.53125 10.3125 5.8373 10.3125 4.98438C10.3125 4.13145 11.0064 3.4375 11.8594 3.4375ZM42.2812 20.2812H40.3746L38.6054 12.8185C38.4216 12.0435 37.7295 11.4963 36.933 11.4963H27.3484C26.5519 11.4963 25.8597 12.0435 25.6761 12.8185L23.9067 20.2812H20.0933L18.3241 12.8185C18.1404 12.0435 17.4482 11.4963 16.6518 11.4963H7.06707C6.27052 11.4963 5.57838 12.0435 5.39473 12.8185L3.62545 20.2812H1.71875C0.769484 20.2812 0 21.0507 0 22C0 22.9493 0.769484 23.7188 1.71875 23.7188H3.26562V42.2812C3.26562 43.2305 4.03511 44 4.98438 44C5.93364 44 6.70312 43.2305 6.70312 42.2812V40.7343H37.2969V42.2812C37.2969 43.2305 38.0664 44 39.0156 44C39.9649 44 40.7344 43.2305 40.7344 42.2812C40.7344 41.0207 40.7344 24.5692 40.7344 23.7188H42.2812C43.2305 23.7188 44 22.9493 44 22C44 21.0507 43.2305 20.2812 42.2812 20.2812ZM28.7073 14.9338H35.574L36.8418 20.2812H27.4395L28.7073 14.9338ZM8.426 14.9338H15.2927L16.5605 20.2812H7.15825L8.426 14.9338ZM6.70312 23.7188H37.2969V37.2968H6.70312V23.7188Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Управляющий</span>
                                        <span>совет</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">В нашей сети франчайзи-партнеры могут влиять на стратегическое развитие всей компании</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ui-card">
                                <div class="ui-card__top">
                                    <div class="ui-card__icon">
                                        <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28.7109 0C17.6307 0 8.50188 8.79344 7.51242 19.9817H5.55158L3.3342 17.6902C2.57141 16.902 1.33479 16.902 0.572094 17.6902C-0.190601 18.4785 -0.190698 19.7564 0.572094 20.5446L1.98049 22L0.572094 23.4554C-0.190698 24.2437 -0.190698 25.5216 0.572094 26.3098C1.33479 27.0979 2.57141 27.098 3.3342 26.3098L5.55158 24.0183H7.51233C8.50188 35.2066 17.6307 44 28.7109 44C40.4498 44 50 34.1309 50 22C50 9.86912 40.4498 0 28.7109 0ZM28.7109 39.9633C19.7863 39.9633 12.4123 32.9766 11.4385 24.0183H18.6444C19.5591 28.8991 23.7247 32.5963 28.7109 32.5963C34.3649 32.5963 38.9649 27.8428 38.9649 22C38.9649 16.1572 34.3649 11.4037 28.7109 11.4037C23.7247 11.4037 19.5591 15.1009 18.6444 19.9817H11.4385C12.4123 11.0234 19.7863 4.0367 28.7109 4.0367C38.2958 4.0367 46.0938 12.0951 46.0938 22C46.0938 31.9049 38.2958 39.9633 28.7109 39.9633ZM28.7109 19.9817H22.6721C23.498 17.3494 25.8922 15.4404 28.7109 15.4404C32.211 15.4404 35.0586 18.383 35.0586 22C35.0586 25.617 32.211 28.5596 28.7109 28.5596C25.8922 28.5596 23.498 26.6506 22.6721 24.0183H28.7109C29.7897 24.0183 30.6641 23.1147 30.6641 22C30.6641 20.8853 29.7897 19.9817 28.7109 19.9817Z" fill="#AA0001"/>
                                        </svg>
                                    </div>
                                    <div class="ui-card__title">
                                        <span>Сильный</span>
                                        <span>маркетинг</span>
                                    </div>
                                </div>
                                <div class="ui-card__main">Мощный digital и классический маркетинг, который поможет заявить вам о себе на старте и стать №1 в своем городе</div>
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
                                <img src="{{ asset('img/office/1.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="{{ asset('img/office/2.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="office-image">
                                <img src="{{ asset('img/office/3.jpg') }}" alt="img">
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
                                <img src="{{ asset('img/franchise-statistic-image.jpg') }}" alt="">
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
    <script src="{{ asset('js/pages/franchise.js') }}"></script>
@endsection
