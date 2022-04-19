DOMLoadedFunctions.push({
    call: () => {
        /**
         * Должны прочитать GET запрос, если там параметры есть и тип у нас у формы AJAX - заносим в GET параметры
         * @param category
         * @param options
         */
        let params = helper.getGETParams();

        function countOffers(category, options) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/api/buildings-category/count-offers`,
                type: 'post',
                data: {
                    slug: `${category}`,
                    options
                },
                beforeSend: () => {
                    $('.first-screen__filters__btn').html(`
                        <div class="content-preloader">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#ffffff" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                              <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                            </circle>
                            </svg>
                        </div>
                    `);
                },
                success: (response) => {
                    $('.first-screen__filters__btn').html(response.data.template);
                },
                error: (e) => {
                    // console.log(e);
                }
            });
        }

        function setContentPreloader() {
            $('.main__container').html((`
                <div class="preloader">
                    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" /><g><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff" transform="rotate(30 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#f6e5e5" transform="rotate(60 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#eecccc" transform="rotate(90 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#e5b2b2" transform="rotate(120 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#dd9999" transform="rotate(150 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#d47f80" transform="rotate(180 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#cc6667" transform="rotate(210 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#c34c4d" transform="rotate(240 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#bb3334" transform="rotate(270 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#b2191a" transform="rotate(300 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#aa0001" transform="rotate(330 64 64)"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;30 64 64;60 64 64;90 64 64;120 64 64;150 64 64;180 64 64;210 64 64;240 64 64;270 64 64;300 64 64;330 64 64" calcMode="discrete" dur="1080ms" repeatCount="indefinite"></animateTransform></g></svg>
                </div>
            `));
        }



        function initFlatsFilters(form, category, type) {
            let options = {};
            if (params.room_size) {
                options.roomSize = Number(params.room_size);
            }

            function setValues() {
                form.find('.hidden').remove();
                form.append(`<div class="hidden" style="display: none;"></div>`);
                let $hidden = form.find('.hidden');

                if (options.district) {
                    $hidden.append(`<input type="hidden" value="${options.district}" name="district">`);
                }
                if (options.city) {
                    $hidden.append(`<input type="hidden" value="${options.city}" name="city">`);
                }
                if (options.roomSize) {
                    $hidden.append(`<input type="hidden" value="${options.roomSize}" name="room_size">`);
                }
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/api/filters/categories/flats',
                type: 'get',
                data: {
                    slug: `${category}`
                },
                success: (response) => {
                    form.html(response.data.template);
                    form.attr('action', response.data.action);

                    const districtSelect = new Select('.select.district-select', {
                        placeholder: 'Выбрать',
                        // selectedId: '2',
                        selectedId: false,
                        data: [
                            {id: '1', value: 'Любой', validId: -1},
                            {id: '2', value: 'Пушкинский', validId: 1},
                        ],
                        onSelect(item) {
                            options.district = item.validId;
                            countOffers(category, options);
                        }
                    });
                    const citySelect = new Select('.select.city-select', {
                        placeholder: 'Выбрать',
                        // selectedId: '2',
                        data: [
                            {id: '1', value: 'Любой', validId: -1},
                            {id: '2', value: 'Москва', validId: 1},
                            {id: '3', value: 'Ялта', validId: 2},
                            {id: '4', value: 'Алматы', validId: 3},
                        ],
                        onSelect(item) {
                            options.city = item.validId;
                            countOffers(category, options);
                        }
                    });

                    let roomSizeData = {
                        els: [
                            {id: '1', value: 'Любая', size: -1},
                            {id: '2', value: '1 комнатная', size: 1},
                            {id: '3', value: '2 комнатная', size: 2},
                            {id: '4', value: '3 комнатная', size: 3},
                            {id: '5', value: '4 комнатная', size: 4},
                            {id: '6', value: '5 комнатная', size: 5},
                            {id: '7', value: '6 комнатная', size: 6},
                        ],
                        selected: false
                    };
                    roomSizeData.els.forEach((el, index) => {
                        if (el.size === options.roomSize) roomSizeData.selected = el.id;
                    });
                    const roomSizeSelect = new Select('.select.roomSize-select', {
                        placeholder: 'Выбрать',
                        selectedId: roomSizeData.selected,
                        data: roomSizeData.els,
                        onSelect(item) {
                            options.roomSize = item.size;
                            countOffers(category, options);
                        }
                    });

                    $filterBtn = $('.first-screen__filters__btn');
                    $filterBtn.click((e) => {
                        e.preventDefault();

                        if (type === 'redirect') {
                            setValues();
                            form.submit();
                        }
                        else if (type === 'ajax') {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: `/api/buildings-category`,
                                type: 'get',
                                data: {
                                    slug: `${category}`,
                                    options
                                },
                                beforeSend: () => {
                                    setContentPreloader();
                                },
                                success: (response) => {
                                    $('.main__container').html(response.data.template);
                                    startSlider.rooms();

                                    const url = new URL(document.location);
                                    const searchParams = url.searchParams;
                                    searchParams.delete('page');
                                    window.history.pushState({}, '', url.toString());
                                },
                                error: (e) => {
                                    // console.log(e);
                                }
                            });
                        }
                    });
                },
                error: (e) => {
                    // console.log(e);
                }
            });
        }

        function initFilters() {
            let filtersForm = $('.first-screen__filters');
            let estatesCategory = filtersForm.data('category');
            let filtersFormType = filtersForm.data('type');

            switch (estatesCategory) {
                case 'flats': {
                    initFlatsFilters(filtersForm, estatesCategory, filtersFormType);
                    break;
                }

                default: {
                    alert('Не удалось загрузить фильтры');
                    break;
                }
            }
        }

        initFilters();
    }
});
