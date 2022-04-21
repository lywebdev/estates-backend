DOMLoadedFunctions.push({
    call: () => {
        let repeaterContainers = $('.repeater-container');
        repeaterContainers.each((index, el) => {
            let currentRepeater = $(el);
            let itemForRepeat = currentRepeater.find('.repeater-item');
            let repeaterBtn = currentRepeater.find('.repeater-container__btn .btn');

            repeaterBtn.click((e) => {
                currentRepeater.find('.repeater-container__items').append(itemForRepeat.clone().val(''));
            });
        });
    }
});
