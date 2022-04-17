@foreach ($esCategories as $esCategory)
    <li class="header__nav-item nav-menu__item"><a href="{{ route('buildingsCategory', $esCategory->slug) }}">{{ $esCategory->name }}</a></li>
@endforeach
