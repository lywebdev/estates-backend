$(document).ready(() => {
    let files = [];
    let $imagesContainer = $('.images-container');

    const rerenderFilesContainer = () => {
        $imagesContainer.html('');

        for (let i = 0; i < files.length; i++) {
            let template = `<div class="images-container__item" data-img-id="${i}">
                    <img src="${files[i]}">
                    <div class="images-container__item__remove btn btn-block btn-secondary btn-flat">Удалить</div>
                </div>`;

            $imagesContainer.append(template);
        }
        $('#filesInJson').val(JSON.stringify(files));

        let removeBtn = $('.images-container__item__remove');
        removeBtn.unbind('click');
        removeBtn.bind('click', (e) => {
            let currentDelBtn = $(e.currentTarget);
            let imageItem = currentDelBtn.parent('.images-container__item');
            let imgId = imageItem.data('img-id');

            files.splice(imgId, 1);
            rerenderFilesContainer();
        });
    }


    $('.btn-add-file').click(() => {
        $('#files').trigger('click');
    });

    $('.btn-remove-all').click(() => {
        files = [];
        rerenderFilesContainer();
    });


    $('#files').change((e) => {
        let input = $(e.target)[0];
        if (input.files.length > 0) {
            for (let i = 0; i < input.files.length; i++) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    files.push(e.target.result);
                }
                reader.readAsDataURL(input.files[i]);
                reader.onloadend = () => {
                    rerenderFilesContainer();
                }
            }
        }
    });

    $('.images-container__remove').click((e) => {
        let el = $(e.target);
        let $imageItem = el.closest('.images-container__item');
        let route = $imageItem.data('route');

        function removeAction() {
            return $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `${route}`,
                type: 'delete',
            });
        }

        $.when( removeAction() ).then((removePhotoResponse) => {
            $imageItem.remove();
        });
    });

    let pathname = `${document.location.protocol}//${document.location.host}${document.location.pathname}`;
    $('.nav-link').each((index, el) => {
        let $el  = $(el);
        let href = $el.attr('href');
        if (href === pathname) {
            $el.addClass('active');
            let $parentNav = $el.closest('.nav-item').parents().eq(0).closest('.nav-item');
            if ($parentNav.length !== 0) {
                $parentNav.each((index, el) => {
                    $(el).addClass('menu-is-opening');
                    $(el).addClass('menu-open');
                });
            }
        }
    });
});
