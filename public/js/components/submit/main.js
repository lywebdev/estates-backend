DOMLoadedFunctions.push({
    call: () => main()
});

function main() {
    let $form = $('#estate-submit-form');
    let category = $form.data('category');
    let userAuth = $form.data('user-auth');
    let data = JSON.parse($('#json-data').val());
    let submitBtn = $form.find('.form__submit');
    let route = $form.attr('action');
    let submitted = 0;

    let galleryFiles = {
        photos: [],
        layout: false,
    };
    let requestData = {
        condition: -1,
        city: -1,
        district: -1,
        roomSize: 1,
        wallMaterial: -1,
        bathroom: -1,
    };


    submitBtn.click((e) => {
        e.preventDefault();
    });
    // Проверять сначала на клиенте, выдаем alert'ы. Потом шлем на сервер и там проверяем и отдаем результат

    let accordion = new Accordion('.app-submission__options .accordion-container');

    let dropzoneContainers = $('.dropzoneContainer');
    dropzoneContainers.each((index, el) => {
        let $el = $(el);
        let input = $el.find('.dropzoneInput');
        input.bind('click', (e) => {
            e.stopPropagation();
        });

        $el.bind('click', (e) => {
            input.click();
        });


        input.bind('change', (e) => {
            let $currentInput = $(e.target);
            let currentInput = $currentInput[0];
            let file = currentInput.files[0];
            // let dt = new DataTransfer();
            let reader = new FileReader();
            $currentDropzone = $currentInput.closest('.dropzoneContainer');

            // dt.items.add(file);
            reader.onload = (e) => {
                let imgContainer = $currentDropzone.find('.dropzoneContainer__image');
                let template = `<img src="${e.target.result}">`;
                imgContainer.html(template);
            }

            reader.readAsDataURL(file);
        });
    });


    function getGalleryData() {
        galleryFiles.layout = false;
        galleryFiles.photos = [];

        function getSource(el) {
            let imageContainer = el.prev('.dropzoneContainer__image');
            let img = imageContainer.find('img');
            let src = false;
            if (img.length !== 0) {
                src = img.attr('src');
            }

            return src ? src : false;
        }

        $('.dropzoneInput').each((index, el) => {
            let currentEl = $(el);

            if (currentEl.attr('id') === 'layout') {
                let src = getSource(currentEl);
                if (src) {
                    galleryFiles.layout = src;
                }
            }
            else {
                let src = getSource(currentEl);
                if (src) {
                    galleryFiles.photos.push(src);
                }
            }
        });

        requestData.gallery = galleryFiles;
    }

    function getData() {
        let furniture = false;
        let parking = false;
        $('.furniture-input').each((index, el) => {
            if (el.checked && $(el).val() === 'yes') {
                furniture = true;
            }
        });
        $('.parking-input').each((index, el) => {
            if (el.checked && $(el).val() === 'yes') {
                parking = true;
            }
        });

        requestData.price = Number($('#price').val());
        requestData.floor = Number($('#floor').val());
        requestData.floors = Number($('#floors').val());
        requestData.ceiling_height = Number($('#ceiling_height').val());
        requestData.year = Number($('#year').val());
        requestData.area = Number($('#area').val());
        requestData.living_area = Number($('#living_area').val());
        requestData.kitchen_area = Number($('#kitchen_area').val());
        requestData.house_number = Number($('#house_number').val());
        requestData.room_number = Number($('#room_number').val());

        requestData.owner_phone = $('#phone').val();
        requestData.owner_name = $('#owner_name').val();
        requestData.description = $('#description').val();

        requestData.furniture = furniture;
        requestData.parking = parking;
    }



    function flatsFormInit() {
        // Город
        let citiesData = [
            {id: '1', value: 'Не указан', validId: -1}
        ];
        data.cities.map((el, index) => {
            citiesData.push({
                id: `${index+2}`,
                value: el.name,
                validId: el.id
            });
        });
        const citySelect = new Select('.select.city-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: citiesData,
            onSelect(item) {
                requestData.city = item.validId;
            }
        });

        // Состояние
        let conditionsData = [
            {id: '1', value: 'Не указано', validId: -1}
        ];
        data.conditions.map((el, index) => {
            conditionsData.push({
                id: `${index+2}`,
                value: el.name,
                validId: el.id,
                description: el.description,
                preview: el.preview
            });
        });
        const conditionSelect = new Select('.select.state-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: conditionsData,
            onSelect(item) {
                requestData.condition = item.validId;
                let conditionTemplate = ``;

                if (item.validId !== -1) {
                    let preview = false;
                    if (item.preview) {
                        preview = item.preview;
                    }
                    let description = '';
                    if (item.description) {
                        description = item.description;
                    }

                    let leftTemplate = ``;
                    if (preview) {
                        leftTemplate = `
                        <div class="room-preview__left">
                            <div class="room-preview__img">
                                <img src="/${preview}" alt="condition preview">
                            </div>
                        </div>`;
                    }

                    let rightTemplate = (`
                        <div class="room-preview__right">
                            <div class="room-preview__name">${item.value}</div>
                            <div class="room-preview__description">${description}</div>
                        </div>
                    `);

                    conditionTemplate = `${leftTemplate}${rightTemplate}`;
                }

                $('.room-preview').html(conditionTemplate);
            }
        });

        // Район
        let districtsData = [
            {id: '1', value: 'Не указан', validId: -1}
        ];
        data.districts.map((el, index) => {
            districtsData.push({
                id: `${index+2}`,
                value: el.name,
                validId: el.id
            });
        });
        const districtSelect = new Select('.select.district-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: districtsData,
            onSelect(item) {
                requestData.district = item.validId;
            }
        });

        // Комнатность
        const roomSizeSelect = new Select('.select.roomSize-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: [
                {id: '1', value: '1 комнатная', validId: 1},
                {id: '2', value: '2 комнатная', validId: 2},
                {id: '3', value: '3 комнатная', validId: 3},
                {id: '4', value: '4 комнатная', validId: 4},
                {id: '5', value: '5 комнатная', validId: 5},
                {id: '6', value: '6 комнатная', validId: 6},
                {id: '7', value: '7 комнатная', validId: 7},
            ],
            onSelect(item) {
                requestData.roomSize = item.validId;
            }
        });

        // Материал стен
        let wallMaterialsData = [
            {id: '1', value: 'Не указан', validId: -1}
        ];
        data.wall_materials.map((el, index) => {
            wallMaterialsData.push({
                id: `${index+2}`,
                value: el.name,
                validId: el.id
            });
        });
        const wallMaterialSelect = new Select('.select.wallMaterial-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: wallMaterialsData,
            onSelect(item) {
                requestData.wallMaterial = item.validId;
            }
        });

        // Санузел
        let bathroomsData = [
            {id: '1', value: 'Не указан', validId: -1}
        ];
        data.bathrooms.map((el, index) => {
            bathroomsData.push({
                id: `${index+2}`,
                value: el.name,
                validId: el.id
            });
        });
        const bathroomsSelect = new Select('.select.bathroom-select', {
            placeholder: 'Выбрать',
            selectedId: '1',
            data: bathroomsData,
            onSelect(item) {
                requestData.bathroom = item.validId;
            }
        });




        submitBtn.click((e) => {
            if (!submitted) {
                getGalleryData();
                getData();


                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `${route}`,
                    type: 'post',
                    data: requestData,
                    // dataType: "json",
                    success: (data, value, response) => {
                        if (response.status === 201) {
                            submitted++;
                            if (data.status) {
                                const successAlert = new Alert({
                                    type: 'success',
                                    text: 'Объект недвижимости успешно добавлен',
                                });
                            }
                            else {
                                const successAlert = new Alert({
                                    type: 'success',
                                    text: 'Объект недвижимости отправлен на рассмотрение',
                                });
                            }
                        }
                    },
                    error: (e) => {
                        if (e.status === 401) {
                            const notAuthAlert = new Alert({
                                type: 'error',
                                text: 'Вам необходимо авторизоваться, чтобы добавить объект недвижимости',
                                textConfirm: 'Авторизоваться',
                                link: '/auth/login'
                            });
                        }
                    }
                });
            }
            else {
                const notAuthAlert = new Alert({
                    type: 'error',
                    text: 'Объект недвижимости уже добавлен',
                    textConfirm: 'Хорошо',
                });
            }
        });
    }






    if (category === 'flats') {
        flatsFormInit();
    }
    else {
        location="/";
    }
}
