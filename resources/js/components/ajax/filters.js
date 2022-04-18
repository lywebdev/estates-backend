$(document).ready(() => {

    // ЕСЛИ У НАС ТИП REDIRECT - ДОБАВИТЬ СКРЫТЫЕ ПОЛЯ И ОТПРАВИТЬ ИХ ПРИ ОТПРАВКЕ ФОРМЫ


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


    function initFlatsFilters(form, category, type) {
        let options = {};

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
                const roomSizeSelect = new Select('.select.roomSize-select', {
                    placeholder: 'Выбрать',
                    // selectedId: '1',
                    data: [
                        {id: '1', value: 'Любая', size: -1},
                        {id: '2', value: '1 комнатная', size: 1},
                        {id: '3', value: '2 комнатная', size: 2},
                        {id: '4', value: '3 комнатная', size: 3},
                        {id: '5', value: '4 комнатная', size: 4},
                        {id: '6', value: '5 комнатная', size: 5},
                        {id: '7', value: '6 комнатная', size: 6},
                    ],
                    onSelect(item) {
                        options.roomSize = item.size;
                        countOffers(category, options);
                    }
                });

                $filterBtn = $('.first-screen__filters__btn');
                $filterBtn.click((e) => {
                    e.preventDefault();

                    setValues();
                    if (type === 'redirect') {
                        form.submit();
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

});
