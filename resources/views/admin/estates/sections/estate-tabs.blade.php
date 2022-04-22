<h4 class="">Выберите тип недвижимости</h4>
<ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
    <li class="nav-item">
        <a
           @class([
                'nav-link',
                'active' => isset($estate) && (\App\Models\Estate\Estate::CATEGORIES['flats']['slug'] == $estate->category)
            ])
           id="custom-content-above-home-tab"
           data-toggle="pill"
           href="#estate_{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
           role="tab"
           aria-controls="custom-content-above-home"
           aria-selected="true">Квартира</a>
    </li>
    <li class="nav-item">
        <a
            @class([
                'nav-link',
                'active' => isset($estate) && (\App\Models\Estate\Estate::CATEGORIES['regions']['slug'] == $estate->category)
            ])
           id="custom-content-above-home-tab"
           data-toggle="pill"
           href="#estate_{{ \App\Models\Estate\Estate::CATEGORIES['regions']['slug'] }}"
           role="tab"
           aria-controls="custom-content-above-home"
           aria-selected="true">Дом/Участок</a>
    </li>
    <li class="nav-item">
        <a
            @class([
                'nav-link',
                'active' => isset($estate) && (\App\Models\Estate\Estate::CATEGORIES['commercial']['slug'] == $estate->category)
            ])
            id="custom-content-above-home-tab"
            data-toggle="pill"
            href="#estate_{{ \App\Models\Estate\Estate::CATEGORIES['commercial']['slug'] }}"
            role="tab"
            aria-controls="custom-content-above-home"
            aria-selected="true">Коммерция</a>
    </li>
</ul>
<div class="tab-content" id="custom-content-above-tabContent">
    <div class="tab-pane fade show active pt-2"
         id="estate_{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
         data-estate-category="{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
         role="tabpanel"
         aria-labelledby="custom-content-above-home-tab">

        @include('admin.estates.sections.flat')

    </div>
    <div class="tab-pane fade show pt-2"
         id="estate_{{ \App\Models\Estate\Estate::CATEGORIES['regions']['slug'] }}"
         data-estate-category="{{ \App\Models\Estate\Estate::CATEGORIES['regions']['slug'] }}"
         role="tabpanel"
         aria-labelledby="custom-content-above-home-tab">

        @include('admin.estates.sections.region')

    </div>
    <div class="tab-pane fade show pt-2"
         id="estate_{{ \App\Models\Estate\Estate::CATEGORIES['commercial']['slug'] }}"
         data-estate-category="{{ \App\Models\Estate\Estate::CATEGORIES['commercial']['slug'] }}"
         role="tabpanel"
         aria-labelledby="custom-content-above-home-tab">

        @include('admin.estates.sections.commercial')

    </div>
</div>
