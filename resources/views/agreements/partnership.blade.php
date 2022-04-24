@extends('layouts.app')

@section('ext_styles')
    <style>
        .packets input {
            margin-right: 5px;
        }

        .packets label {
            margin-right: 15px;
        }
    </style>
@endsection

@section('content')
    <section id="content">
        <div class="agreement-form">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="section__title">Договор: Соглашение о партнёрстве</div>
                        </div>
                    </div>
                    <div class="agreement-form__form">
                        <form action="{{ route('agreements.sign', [$agreement['type']]) }}" method="post">
                            @csrf
                            <div class="form__item">
                                <label for="surname">Фамилия</label>
                                <input type="text" class="input" placeholder="Укажите фамилию" name="surname" id="surname" required>
                            </div>
                            <div class="form__item">
                                <label for="name">Имя</label>
                                <input type="text" class="input" placeholder="Укажите имя" name="name" id="name">
                            </div>
                            <div class="form__item">
                                <label for="patronymic">Отчество</label>
                                <input type="text" class="input" placeholder="Укажите отчество" name="patronymic" id="patronymic">
                            </div>

                            <div class="form__item">
                                <label for="iin">ИИН</label>
                                <input type="text" class="input" placeholder="Укажите ИИН" name="iin" id="iin" required>
                            </div>

                            <div class="form__item">
                                <label for="residential_address">Адрес проживания</label>
                                <input type="text" class="input" placeholder="Ваш адрес проживания" name="residential_address" id="residential_address">
                            </div>
                            <div class="form__item">
                                <label for="estate_address">Адрес объекта</label>
                                <input type="text" class="input" placeholder="Адрес объекта" name="estate_address" id="estate_address">
                            </div>
                            <div class="form__item">
                                <label for="commission_amount">Сумма комиссии</label>
                                <input type="text" class="input" placeholder="Сумма комиссии" name="commission_amount" id="commission_amount">
                            </div>

                            <div class="form__item">
                                <label for="phone">Мобильный номер</label>
                                <input type="text" class="input" placeholder="Мобильный номер" name="phone" id="phone" required>
                            </div>
                            <div class="form__item packets">
                                <label for="">Пакет:</label>
                                <label for="packet_gold">
                                    <input type="radio" name="packet" value="Gold" id="packet_gold">
                                    Gold
                                </label>
                                <label for="packet_platinum">
                                    <input type="radio" name="packet" value="Platinum" id="packet_platinum">
                                    Platinum
                                </label>
                                <label for="packet_vip">
                                    <input type="radio" name="packet" value="Vip" id="packet_vip">
                                    Vip
                                </label>
                            </div>
                            <div class="form__item agreement-checkbox">
                                <label for="agreement">
                                    <input type="checkbox" name="agreement" id="agreement">
                                    <span style="margin-left: 10px; font-size: 14px;">Нажимая на кнопку "Подписать Договор" я подтверждаю, что ознакомлен с Договором и Общими условиями</span>
                                </label>
                            </div>
                            @include('agreements.layouts.errors')

                            <button class="btn">Подписать договор</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/components/select.js')}}"></script>

    <script src="{{ asset('js/components/repeater.js') }}"></script>
@endsection
