{{--active class - nav-menu__item--active--}}
<li class="header__nav-item nav-menu__item"><a href="{{ route('sell') }}">Купить</a></li>
<li class="header__nav-item nav-menu__item"><a href="#">Продать</a></li>

@include('components.nav.categories')

<li class="header__nav-item nav-menu__item"><a href="{{ route('speedMortgage') }}">Скоростная Ипотека</a></li>
<li class="header__nav-item nav-menu__item"><a href="{{ route('estimation') }}">Онлайн Оценка</a></li>
<li class="header__nav-item nav-menu__item"><a href="{{ route('vacancy') }}">Работа</a></li>
<li class="header__nav-item nav-menu__item"><a href="{{ route('franchise') }}">Франшиза</a></li>
<li class="header__nav-item nav-menu__item"><a href="#">Выгоды для Продавца</a></li>
<li class="header__nav-item nav-menu__item"><a href="#">Выгоды для покупателя</a></li>
