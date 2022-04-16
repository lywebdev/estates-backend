DOMLoadedFunctions.push({
    call: () => {
        let applyFiltersBtn = document.querySelector('.first-screen__filters__btn');
        let district = undefined;
        let city = undefined;
        let roomSize = -1;
        let options = {};
        let $filters = $('.first-screen__filters');
        let route = $filters.data('route');
        let slug  = $filters.data('slug');


        function countOffers() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/api/buildings-category/count-offers`,
                type: 'post',
                data: {
                    slug: `${slug}`,
                    options
                },
                success: (response) => {
                    console.log(response);
                    $('.first-screen__filters__btn').html(response.data.template);
                },
                error: (e) => {
                    console.log(e);
                }
            });
        }

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
                {id: '1', value: 'Любая', size: -1},
                {id: '2', value: '1 комнатная', size: 1},
                {id: '3', value: '2 комнатная', size: 2},
                {id: '4', value: '3 комнатная', size: 3},
                {id: '5', value: '4 комнатная', size: 4},
                {id: '6', value: '5 комнатная', size: 5},
                {id: '7', value: '6 комнатная', size: 6},
            ],
            onSelect(item) {
                roomSize = item.size;
                options.roomSize = roomSize;

                countOffers();
            }
        });


        function setPreloader() {
            $('.main__container').html((`
                <div class="preloader">
                    <?xml version="1.0" encoding="UTF-8" standalone="no"?><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" /><g><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#ffffff" transform="rotate(30 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#f6e5e5" transform="rotate(60 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#eecccc" transform="rotate(90 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#e5b2b2" transform="rotate(120 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#dd9999" transform="rotate(150 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#d47f80" transform="rotate(180 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#cc6667" transform="rotate(210 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#c34c4d" transform="rotate(240 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#bb3334" transform="rotate(270 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#b2191a" transform="rotate(300 64 64)"/><ellipse cx="64" cy="18.75" rx="6.25" ry="18.75" fill="#aa0001" transform="rotate(330 64 64)"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;30 64 64;60 64 64;90 64 64;120 64 64;150 64 64;180 64 64;210 64 64;240 64 64;270 64 64;300 64 64;330 64 64" calcMode="discrete" dur="1080ms" repeatCount="indefinite"></animateTransform></g></svg>
                </div>
            `));
        }

        applyFiltersBtn.addEventListener('click', (e) => {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/api/buildings-category`,
                type: 'get',
                data: {
                    slug: `${slug}`,
                    options
                },
                beforeSend: () => {
                    setPreloader();
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
                    console.log(e);
                }
            });
        });
    }
});
