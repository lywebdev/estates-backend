DOMLoadedFunctions.push({
    call: () => {
        let $filtersForm =  $('.first-screen__filters');
        let slug = $('.sortable__item.sortable__item--selected').data('category');

        switch (slug) {
            case 'flats': {
                flatsFilter();
                break;
            }
            default: {
                alert('Возникла ошибка');
                break;
            }
        }


        function flatsFilter() {
            let district = undefined;
            let city = undefined;
            let roomSize = undefined;

            function setValues() {
                $filtersForm.find('.hidden').remove();
                $filtersForm.append(`<div class="hidden" style="display: none;"></div>`);
                let $hidden = $filtersForm.find('.hidden');

                if (district) {
                    $hidden.append(`<input type="hidden" value="${district.value}" name="district">`);
                }
                if (city) {
                    $hidden.append(`<input type="hidden" value="${city.value}" name="city">`);
                }
                if (roomSize) {
                    $hidden.append(`<input type="hidden" value="${roomSize.size}" name="room_size">`);
                }
            }


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/api/filters/categories/flats',
                type: 'get',
                data: {
                    slug: `${slug}`
                },
                beforeSend: () => {
                },
                success: (response) => {
                    $filtersForm.html(response.data.template);
                    $filtersForm.attr('action', response.data.action);

                    const districtSelect = new Select('.select.district-select', {
                        placeholder: 'Выбрать',
                        // selectedId: '2',
                        data: [
                            {id: '1', value: 'Пушкинский'},
                        ],
                        onSelect(item) {
                            district = item;
                        }
                    });
                    const citySelect = new Select('.select.city-select', {
                        placeholder: 'Выбрать',
                        // selectedId: '2',
                        data: [
                            {id: '1', value: 'Московская'},
                        ],
                        onSelect(item) {
                            city = item;
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
                            roomSize = item;
                        }
                    });

                    $filterBtn = $('.first-screen__filters__btn');
                    $filterBtn.click((e) => {
                        e.preventDefault();

                        setValues();
                        $filtersForm.submit();
                    });
                },
                error: (e) => {
                    // console.log(e);
                }
            });
        }


        // Мы должны смотреть на активный класс у фильтрации
        // по умолчанию просто у первого итема он актив
        // обязательно делать проверки, чтобы не было не загрузок, бесконечных загрузок и т.д.

        // Обработка табов фильтрации
        $('.sortable__item').click((e) => {
            let currentTab = $(e.target);
            if (currentTab.length !== 0 ) {
                let currentCategory = currentTab.data('category');
                alert(currentCategory)
            }
        });
    }
});
