@extends('layouts.app')


@section('ext_styles')
    <style>
        .vacancy-cards .vacancy-card {
            height: 100%;
            display: flex;
            flex-direction: column
        }

        .vacancy-card__name {
            margin-bottom: 45px;
        }

        .vacancy-card__btn {
            margin-top: auto;
        }

        .agreement-item:not(:last-child) {
            margin-bottom: 50px;
        }
    </style>
@endsection

@section('content')
    <section id="content">
        <div class="breadcrumbs">
            <div class="breadcrumbs__bg">
                <img src="{{ asset('img/breadcrumbs-photo.jpg') }}" alt="">
            </div>
            <div class="ac-grid">
                <div class="breadcrumbs__path">
                    <a href="/" class="breadcrumbs__item breadcrumbs__prev">Главная</a>
                    <span class="breadcrumbs__item breadcrumbs__current">Заключение договора</span>
                </div>
                <div class="breadcrumbs__title">Заключение договора</div>
            </div>
        </div>

        <div class="vacancy-cards">
            <div class="container-fluid">
                <div class="ac-grid">

                    <div class="agreement-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section__title">Собственник</div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Стандартаный для Собственника</div>
                                    <a href="{{ route('agreements.agreement', ['owner', 'standard']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Частичный эксклюзив для Собственника</div>
                                    <a href="{{ route('agreements.agreement', ['owner', 'partialExclusive']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Эксклюзив для собственника</div>
                                    <a href="{{ route('agreements.agreement', ['owner', 'exclusive']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agreement-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section__title">Другие варианты договоров</div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Покупатель</div>
                                    <a href="{{ route('agreements.agreement', ['buyer']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Кандидат-агент</div>
                                    <a href="{{ route('agreements.agreement', ['agent']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agreement-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section__title">Аренда</div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Арендатор</div>
                                    <a href="{{ route('agreements.agreement', ['rent', 'terant']) }}" class="vacancy-card__btn btn">Заключить</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="vacancy-card">
                                    <div class="vacancy-card__name">Арендодатель</div>
                                    <a href="#" class="vacancy-card__btn btn">Заключить</a>
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
