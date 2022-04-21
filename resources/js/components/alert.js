class Alert {
    colors = {
        success: '',
        warning: '',
        error: ''
    };

    constructor(params) {
        this.type  = params.type;
        this.text  = params.text;
        this.delay = params.delay;
        this.duration = params.duration;
        this.rendered = false;
        this.selector = params.selector;
        this.body = document.querySelector('#app');
        this.hZindex = params.hZindex;
        this.textConfirm = params.textConfirm;
        this.link = params.link;
        this.direction = params.direction;
        this.confirmBtn = params.confirmBtn ? params.confirmBtn : false;
        this.hideAfterClick = params.hideAfterClick ? params.hideAfterClick : false;

        this.modalEl = document.createElement('div');
        this.modalEl.classList.add('alert-component');

        this.#setup();
    }


    #setup() {
        let prevModals = document.querySelectorAll('.alert-component');
        for (let i = 0; i < prevModals.length; i++) {
            if (prevModals[i] !== null) {
                function removePreviousModal() {
                    prevModals[i].remove();
                }

                function hidePreviousModal(callback) {
                    prevModals[i].classList.add('hidden');

                    setTimeout(() => {
                        callback();
                    }, 500);
                }

                hidePreviousModal(removePreviousModal);
            }
        }


        switch (this.type) {
            case 'success': {
                this.type = 'success-type';
                break;
            }
            case 'warning': {
                this.type = 'warning-type';
                break;
            }
            case 'error': {
                this.type = 'error-type';
                break;
            }

            default: {
                this.type = undefined;
                break;
            }
        }

        if (!this.text) {
            this.text = "Неизвестная ошибка";
            this.type = 'error-type';
        }

        if (!this.link) {
            this.link = false;
        }

        if (this.type !== undefined) {
            this.modalEl.classList.add(this.type)
        }

        if (this.selector) {
            this.body = document.querySelector(this.selector);
            if (!this.body) {
                this.body = document.querySelector('body');
            }
        }

        // Direction
        if (this.direction) {
            switch (this.direction) {
                case 'up-down': {
                    this.modalEl.classList.add('direction_up-down');
                }
            }
        }

        // Delay
        if (!this.delay) {
            this.delay = 500;
        }

        // Duration
        if (!this.duration) {
            this.duration = 5000; // ms
        }

        // High z-index
        if (this.hZindex) {
            this.modalEl.style.zIndex = "99999";
        }

        if (this.confirmBtn.positionX && this.confirmBtn.positionY) {
            this.modalEl.classList.add(`confirmBtnPosX_${this.confirmBtn.positionX}`);
            this.modalEl.classList.add(`confirmBtnPosY_${this.confirmBtn.positionY}`);
        }


        // Render
        if (!this.rendered) {
            this.#render(this.isVisible);
        }
        else {
            this.show();
        }
    }

    #render() {
        this.modalEl.innerHTML = this.getTemplate(this.text, this.link);
        this.body.append(this.modalEl);
        this.closeHandler = this.closeHandler.bind(this);
        this.modalEl.querySelector('.alert-component__closing-zone .understand').addEventListener('click', this.closeHandler);

        this.rendered = true;

        this.show();
    }


    getTemplate(text, link) {
        function getConfirmEl(context) {
            let confirmTemplate = ``;
            let textConfirm = context.textConfirm ? context.textConfirm : 'Понятно';

            if (context.confirmBtn) {
                confirmTemplate = `<div class="understand alert__confirm-btn">${context.confirmBtn.text}</div>`;
            }
            else {
                if (link) {
                    confirmTemplate = `<a class="understand" href="${link}">${textConfirm}</a>`;
                }
                else {
                    confirmTemplate = `<p class="understand">${textConfirm}</p>`;
                }
            }


            return confirmTemplate;
        }

        let template = (`
            <div class="alert-component__closing-zone">
                ${getConfirmEl(this)}
            </div>
            <div class="alert-component__body">
                <p>${text}</p>
            </div>
        `);


        return template;
    }

    clickHandler() {
        //
    }

    closeHandler() {
        if (this.rendered) {
            this.hide();
        }
    }

    show() {
        setTimeout(() => {
            this.modalEl.classList.add('visible');

            if (!this.hideAfterClick) {
                setTimeout(() => {
                    this.hide();
                }, this.duration);
            }
            else {
                if (this.duration) {
                    setTimeout(() => {
                        this.hide()
                    }, this.duration)
                }
            }
        }, this.delay);
    }

    hide() {
        this.modalEl.classList.remove('visible');
    }

    toggle() {
        this.isVisible ? this.hide() : this.show();
    }

    isVisible() {
        return this.modalEl.classList.contains('visible');
    }
}
