$(document).ready(function() {
    let submitBtn = $('#submitBtn');

    submitBtn.click((e) => {
        e.preventDefault();
        $('#estate_type').val($('.tab-pane.active').data('estate-type'));

        let form = $('#form');
        form.submit();
    })
});
