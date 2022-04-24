resizeDeviceHookFunctions.push({
    func: () => {
        $('.sortable__item:not(.sortable__item--selected)').click((e) => {
            let current = $(e.currentTarget);
            location=`${current.data('route')}`;
        });

        if (device.width <= SCREEN_MD) {
            $('.sortable__item--selected').bind('click', (e) => {
                let itemsContainer = $('.sortable__items');
                if (itemsContainer.hasClass('active')) {
                    itemsContainer.removeClass('active');
                }
                else {
                    itemsContainer.addClass('active');
                }
            });
        }
        else {
            $('.sortable__item--selected').unbind('click');
        }
    }
})
