@extends('layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <section id="content" class="page__buildings">
        <div class="first-screen">
            <div class="breadcrumbs">
                <div class="breadcrumbs__bg">
                    <img src="/img/buildings-breadcrumbs-bg.jpg" alt="">
                </div>
                <div class="ac-grid">
                    <div class="breadcrumbs__path">
                        <a href="#" class="breadcrumbs__item breadcrumbs__prev">Главная</a>
                        <span class="breadcrumbs__item breadcrumbs__current">Новостройки</span>
                    </div>
                    <div class="breadcrumbs__title">Новостройки</div>
                </div>

                <div class="container-fluid first-screen__main">
                    <div class="ac-grid">
                        <div class="row">

                            <div class="first-screen__options col-md-12">

                                <div class="first-screen__filters">

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
                                            <div class="btn first-screen__filters__btn">Показать 5 483 предложения</div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="main">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row main__container">
                        <div class="col-md-6">
                            <div class="main__ls row gy-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="room room--fh">
                                        <div class="room__photo">
                                            <img src="/img/buildings/1.jpg" alt="">
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
                                            <div class="room__assortment">
                                                <div class="room__assortment-item">
                                                    <div class="name">Студии  от 26.34 м2</div>
                                                    <div class="price">от 1 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">2к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>
                                                <div class="room__assortment-item">
                                                    <div class="name">3к от 62.93 м2</div>
                                                    <div class="price">от 4 600 000〒</div>
                                                </div>

                                                <div class="room__quantity">В продаже 174 квартиры</div>
                                            </div>
                                            <div class="room__delimiter"></div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <nav aria-label="pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">
                                            <svg width="6" height="14" viewBox="0 0 6 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.99598 1.31254C5.99612 1.4192 5.9765 1.52483 5.93826 1.62334C5.90002 1.72184 5.84392 1.81128 5.77319 1.88648L1.88853 6.04102C1.77095 6.16672 1.67768 6.31596 1.61404 6.48022C1.55041 6.64447 1.51766 6.82052 1.51766 6.99831C1.51766 7.1761 1.55041 7.35215 1.61404 7.5164C1.67768 7.68065 1.77095 7.82989 1.88853 7.95559L5.76813 12.1036C5.84067 12.1786 5.89853 12.2682 5.93834 12.3673C5.97814 12.4664 5.99909 12.5729 5.99997 12.6808C6.00085 12.7886 5.98163 12.8956 5.94344 12.9954C5.90525 13.0952 5.84886 13.1859 5.77754 13.2621C5.70623 13.3384 5.62143 13.3987 5.52809 13.4395C5.43475 13.4804 5.33473 13.5009 5.23389 13.5C5.13304 13.499 5.03337 13.4766 4.94071 13.4341C4.84805 13.3915 4.76424 13.3296 4.69418 13.2521L0.814581 9.10401C0.292961 8.54518 -7.954e-07 7.78787 -7.60887e-07 6.99831C-7.26374e-07 6.20874 0.292961 5.45143 0.814581 4.89261L4.69924 0.738065C4.80546 0.624406 4.94083 0.546995 5.0882 0.515626C5.23558 0.484258 5.38834 0.500342 5.52717 0.561844C5.666 0.623346 5.78464 0.727501 5.86809 0.86113C5.95154 0.99476 5.99605 1.15186 5.99598 1.31254Z" fill="#212137"/>
                                            </svg>
                                        </a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">
                                            <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.504016 12.6875C0.503883 12.5808 0.523501 12.4752 0.561739 12.3767C0.599978 12.2782 0.656079 12.1887 0.726807 12.1135L4.61147 7.95898C4.72905 7.83328 4.82232 7.68404 4.88596 7.51978C4.94959 7.35553 4.98234 7.17948 4.98234 7.00169C4.98234 6.8239 4.94959 6.64785 4.88596 6.4836C4.82232 6.31935 4.72905 6.17011 4.61147 6.04441L0.73187 1.89636C0.659329 1.82144 0.601467 1.73182 0.561662 1.63273C0.521856 1.53365 0.500904 1.42707 0.500028 1.31923C0.499152 1.21139 0.518369 1.10445 0.556558 1.00463C0.594747 0.904819 0.651143 0.814138 0.722456 0.737881C0.793768 0.661623 0.87857 0.601317 0.971911 0.56048C1.06525 0.519643 1.16526 0.499094 1.26611 0.500031C1.36696 0.500969 1.46662 0.523373 1.55929 0.565938C1.65195 0.608503 1.73576 0.670376 1.80582 0.747947L5.68542 4.89599C6.20704 5.45482 6.5 6.21213 6.5 7.00169C6.5 7.79126 6.20704 8.54856 5.68542 9.10739L1.80076 13.2619C1.69454 13.3756 1.55917 13.453 1.4118 13.4844C1.26442 13.5157 1.11166 13.4997 0.97283 13.4382C0.834005 13.3767 0.715359 13.2725 0.631908 13.1389C0.548456 13.0052 0.503948 12.8481 0.504016 12.6875Z" fill="#212137"/>
                                            </svg>
                                        </a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 main__map-container">
                            <div class="row main__rs">
                                <div class="main__map">
                                    <img src="/img/buildings/map.jpg" alt="map">
                                    <div class="arrow">
                                        <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.0827 5.349C30.696 4.913 30.3173 4.49966 30.0547 4.237L26.284 0.399662C26.0331 0.163918 25.7007 0.03438 25.3564 0.0381667C25.0121 0.0419533 24.6826 0.17877 24.437 0.419976C24.1913 0.661182 24.0484 0.988077 24.0383 1.33223C24.0282 1.67638 24.1516 2.0111 24.3827 2.26633L28.1613 6.113C28.3053 6.257 28.4867 6.453 28.68 6.665H3.40667C3.60133 6.45166 3.78533 6.25433 3.94 6.105L7.70533 2.26633C7.93642 2.0111 8.05982 1.67638 8.0497 1.33223C8.03958 0.988077 7.89672 0.661182 7.65104 0.419976C7.40535 0.17877 7.07588 0.0419533 6.73161 0.0381667C6.38733 0.03438 6.05493 0.163918 5.804 0.399662L2.04 4.229C1.77333 4.49566 1.39067 4.913 1.004 5.349C0.357763 6.07767 0.000625021 7.01771 0 7.99167L0 8.00767C0.00189881 8.98203 0.35938 9.9222 1.00533 10.6517C1.39067 11.0863 1.76933 11.4997 2.03067 11.7623L5.804 15.5997C6.05493 15.8354 6.38733 15.965 6.73161 15.9612C7.07588 15.9574 7.40535 15.8206 7.65104 15.5794C7.89672 15.3381 8.03958 15.0113 8.0497 14.6671C8.05982 14.323 7.93642 13.9882 7.70533 13.733L3.92533 9.885C3.78133 9.741 3.6 9.545 3.40667 9.333H28.68C28.4867 9.54633 28.3027 9.74367 28.1467 9.893L24.3827 13.733C24.2517 13.856 24.147 14.0042 24.0748 14.1686C24.0026 14.3331 23.9643 14.5105 23.9624 14.6901C23.9604 14.8697 23.9947 15.0479 24.0633 15.2139C24.1319 15.3799 24.2333 15.5304 24.3615 15.6562C24.4897 15.782 24.642 15.8807 24.8092 15.9462C24.9765 16.0117 25.1552 16.0428 25.3348 16.0375C25.5143 16.0322 25.691 15.9907 25.8541 15.9155C26.0172 15.8403 26.1634 15.7328 26.284 15.5997L30.0467 11.769C30.3133 11.5023 30.6947 11.085 31.0827 10.649C31.7294 9.91775 32.0864 8.97522 32.0864 7.999C32.0864 7.02278 31.7294 6.08025 31.0827 5.349Z" fill="#212137"/>
                                        </svg>
                                    </div>
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
    <script src="{{ asset('js/pages/buildings.js') }}"></script>
@endsection
