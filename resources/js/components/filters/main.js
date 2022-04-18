DOMLoadedFunctions.push({
    call: () => {
        let $filtersForm =  $('.first-screen__filters');
        let slug = $filtersForm.data('slug');

        switch (slug) {
            case 'flats': {
                flatsFilter();
                break;
            }
        }


        function flatsFilter() {
            const districtSelect = new Select('.select.district-select', {
                placeholder: 'Выбрать',
                // selectedId: '2',
                data: [
                    {id: '1', value: 'Пушкинский'},
                ],
                onSelect(item) {
                    console.log('Выбранный район: ', item)
                }
            });
            const citySelect = new Select('.select.city-select', {
                placeholder: 'Выбрать',
                // selectedId: '2',
                data: [
                    {id: '1', value: 'Московская'},
                ],
                onSelect(item) {
                    console.log('Выбранная улица: ', item)
                }
            });
            const roomSizeSelect = new Select('.select.roomSize-select', {
                placeholder: 'Выбрать',
                selectedId: '1',
                data: [
                    {id: '1', value: '1 комнатная'},
                    {id: '2', value: '2 комнатная'},
                ],
                onSelect(item) {
                    console.log('Выбранная комнатность: ', item)
                }
            });
        }

        $filterBtn = $('.screen__filters__btn');
    }
});
