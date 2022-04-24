$(document).ready(function() {
    let submitBtn = $('#submitBtn');


    submitBtn.click((e) => {
        e.preventDefault();
        let estateCategory = $('.tab-pane.active').data('estate-category');
        $('#estate_category').val(estateCategory);

        let form = $('#form');
        form.submit();
    })
});
