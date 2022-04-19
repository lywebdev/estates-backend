@extends('layouts.app')


@section('ext_styles')
@endsection

@section('content')
    <section id="content">
        <div class="agreement-form">
            <div class="container-fluid">
                <div class="ac-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="section__title">Договор: Стандартный для Собственника</div>
                        </div>
                    </div>
                    <div class="agreement-form__form">
                        <form action="{{ route('agreements.sign', [$agreement['type'], $agreement['subtype']]) }}" method="post">
                            @csrf
                            <div class="form__item">
                                <label for="surname">Фамилия</label>
                                <input type="text" class="input" placeholder="Укажите фамилию" name="surname" id="surname">
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
                                <input type="text" class="input" placeholder="Укажите ИИН" name="iin" id="iin">
                            </div>

                            <div class="form__item">
                                <label for="residential_address">Адрес проживания</label>
                                <input type="text" class="input" placeholder="Ваш адрес проживания" name="residential_address" id="residential_address">
                            </div>
                            <div class="form__item">
                                <label for="residential_registration">Адрес прописки</label>
                                <input type="text" class="input" placeholder="Ваш адрес прописки" name="residential_registration" id="residential_registration">
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
                                <input type="text" class="input" placeholder="Мобильный номер" name="phone" id="phone">
                            </div>
                            <div class="form__item agreement-checkbox">
                                <label for="agreement">
                                    <input type="checkbox" name="agreement" id="agreement">
                                    <span style="margin-left: 10px; font-size: 14px;">Нажимая на кнопку "Подписать Договор" я подтверждаю, что ознакомлен с Договором и Общими условиями</span>
                                </label>
                            </div>

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
@endsection
