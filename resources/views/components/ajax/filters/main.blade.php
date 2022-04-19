<div class="first-screen__options col-md-12">
    <div class="first-screen__sortable first-screen__sortable--4">
        <div class="sortable">
            <div class="sortable__items row">

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="col-md-12">
                        <div class="sortable__item sortable__item--selected"
                             data-category="{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}">
                            <div class="sortable__selected-value">Вторичная - Квартиры</div>
                            <div class="sortable__selected-icon">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.99996 9.42017C5.7849 9.42017 5.56986 9.33805 5.4059 9.17417L0.246169 4.01439C-0.0820565 3.68616 -0.0820565 3.154 0.246169 2.8259C0.574263 2.49781 1.10632 2.49781 1.43457 2.8259L5.99996 7.39156L10.5654 2.82606C10.8936 2.49797 11.4256 2.49797 11.7537 2.82606C12.0821 3.15416 12.0821 3.68632 11.7537 4.01455L6.59403 9.17433C6.42999 9.33824 6.21495 9.42017 5.99996 9.42017Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="col-md-12">
                        <div class="sortable__item"
                             data-category="{{ \App\Models\Estate\Estate::CATEGORIES['houses']['slug'] }}">Дома и участки</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="col-md-12">
                        <div class="sortable__item">Коммерческая</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="col-md-12">
                        <div class="sortable__item">Новостройки</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('components.ajax.filters.form', ['type' => $formType])
</div>
