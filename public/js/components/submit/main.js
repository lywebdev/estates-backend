DOMLoadedFunctions.push({
    call: () => main()
});

function main() {
    let $form = $('#estate-submit-form');
    let category = $form.data('category');
    let userAuth = $form.data('user-auth');
    let data = JSON.parse($('#json-data').val());

    // Проверять сначала на клиенте, выдаем alert'ы. Потом шлем на сервер и там проверяем и отдаем результат

    let accordion = new Accordion('.app-submission__options .accordion-container');


    function flatsFormInit() {
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
