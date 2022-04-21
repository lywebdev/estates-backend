DOMLoadedFunctions.push({
    call: () => {
        // Change DOM
        setMobileVersionHookFunctions.push({
            func: () => {
                let rateFreeBtn = document.querySelector('.app-submission__row .rate-free');
                if (rateFreeBtn && rateFreeBtn.length !== 0) {
                    let neededRow = document.querySelector('.sortable-section').parentNode.parentNode;
                    neededRow.append(rateFreeBtn);
                }
            }
        });

        setPcVersionHookFunctions.push({
            func: () => {
                let rateFreeBtn = document.querySelector('.rate-free');
                document.querySelector('.for-free-rate').append(rateFreeBtn);
            }
        });

        // Sortable
        let rows = document.querySelectorAll('.photo-gallery__images .sortableContainer');
        for (let i = 0; i < rows.length; i++) {
            let row = rows[i];

            let sort = new Sortable(row, {
                swapThreshold: 1,
                animation: 150,
                ghostClass: 'blue-background-class',
                onUpdate: (e) => {
                }
            });
        }

        // Dropzone
        /*
        let photoGalleryDropzones = document.querySelectorAll('.dropzoneContainer');

        photoGalleryDropzones.forEach((el, index) => {
            let dropzone = photoGalleryDropzones[index];
            let dropzoneInput = dropzone.querySelector('.dropzoneInput');
            const inputMultiple = false;

            ['drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop'].forEach( function(event) {
                dropzone.addEventListener(event, function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                });

                dropzone.addEventListener('dragover', (e) => {
                    dropzone.classList.add('dropzone-dragging');
                }, false);
                dropzone.addEventListener('dragleave', (e) => {
                    dropzone.classList.remove('dropzone-dragging');
                }, false);
                dropzone.addEventListener('click', function(e) {
                    dropzoneInput.click();
                });

                dropzone.addEventListener('drop', (e) => {
                    dropzone.classList.remove('dropzone-dragging');
                    let files = e.dataTransfer.files;
                    let dataTransfer = new DataTransfer();

                    if (!inputMultiple) {
                        let file = files[0];
                        dataTransfer.items.add(file);

                        let reader = new FileReader();

                        reader.onload = function (e) {
                            let img = dropzone.querySelector('img');
                            if (img && img.length !== 0) {
                                img.remove();
                            }
                            let loadBtn = dropzone.querySelector('.photo-galley__load-btn');
                            if (loadBtn && loadBtn.length !== 0) {
                                loadBtn.remove();
                            }

                            let node = document.createElement('img');
                            node.setAttribute('src', e.target.result);
                            dropzone.appendChild(node);
                        };

                        reader.readAsDataURL(file);
                    }

                    let filesToBeAdded = dataTransfer.files;
                    dropzoneInput.files = filesToBeAdded;

                }, false);
            });

        });
        */
    }
});
