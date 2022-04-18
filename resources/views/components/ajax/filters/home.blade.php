<div class="first-screen__options col-md-12">

    <div class="first-screen__options-preloader">
        <div class="preloader">
            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" /><g><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff" transform="rotate(30 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#f6e5e5" transform="rotate(60 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#eecccc" transform="rotate(90 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#e5b2b2" transform="rotate(120 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#dd9999" transform="rotate(150 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#d47f80" transform="rotate(180 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#cc6667" transform="rotate(210 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#c34c4d" transform="rotate(240 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#bb3334" transform="rotate(270 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#b2191a" transform="rotate(300 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#aa0001" transform="rotate(330 64 64)"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;30 64 64;60 64 64;90 64 64;120 64 64;150 64 64;180 64 64;210 64 64;240 64 64;270 64 64;300 64 64;330 64 64" calcMode="discrete" dur="1080ms" repeatCount="indefinite"></animateTransform></g></svg>
        </div>
    </div>

    <div class="first-screen__sortable first-screen__sortable--4">
        <div class="sortable">
            <div class="sortable__items row">

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="col-md-12">
                        <div class="sortable__item sortable__item--selected">
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
                        <div class="sortable__item">Дома и участки</div>
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

    <form class="first-screen__filters"
          data-route=""
          data-slug="{{ \App\Models\Estate\Estate::CATEGORIES['flats']['slug'] }}"
          method="get">
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
                            <div class="col-md-6 col-sm-6 col">
                                <input type="text" class="input" name="cost_to" placeholder="От">
                            </div>
                            <div class="col-md-6 col-sm-6 col">
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
                            <div class="col-md-6 col-sm-6 col">
                                <input type="text" class="input" name="area_to" placeholder="От">
                            </div>
                            <div class="col-md-6 col-sm-6 col">
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
    </form>
</div>
