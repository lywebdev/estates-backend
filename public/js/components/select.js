const getTemplate = (data = [], placeholder, selectedId) => {
    let text = placeholder ?? 'Placeholder по умолчанию'

    const items = data.map(item => {
        let cls = ''
        if (item.id === selectedId) {
            text = item.value
            cls = 'selected'
        }
        return `
      <li class="select__item ${cls}" data-type="item" data-id="${item.id}">${item.value}</li>
    `
    })

    return `
    <div class="select__backdrop" data-type="backdrop"></div>
    <div class="select__input" data-type="input">
      <span data-type="value">${text}</span>
      <span class="select__icon">
          <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.625033 0.00334696C0.707077 0.00323551 0.78833 0.0195841 0.864104 0.0514494C0.939879 0.0833148 1.00867 0.130066 1.06652 0.189006L4.26233 3.42622C4.35902 3.52421 4.47382 3.60193 4.60017 3.65496C4.72651 3.70799 4.86194 3.73529 4.9987 3.73529C5.13546 3.73529 5.27088 3.70799 5.39723 3.65496C5.52358 3.60193 5.63838 3.52421 5.73507 3.42622L8.92588 0.193225C8.98351 0.132774 9.05244 0.0845564 9.12867 0.0513852C9.20489 0.0182141 9.28687 0.00075418 9.36982 2.38975e-05C9.45278 -0.000706385 9.53504 0.0153076 9.61182 0.0471318C9.6886 0.078956 9.75836 0.125953 9.81701 0.18538C9.87567 0.244807 9.92206 0.315475 9.95348 0.39326C9.98489 0.471044 10.0007 0.554388 9.99998 0.638428C9.99926 0.722467 9.98202 0.80552 9.94928 0.88274C9.91654 0.95996 9.86894 1.0298 9.80927 1.08819L6.61847 4.32118C6.1886 4.75587 5.60606 5 4.9987 5C4.39134 5 3.8088 4.75587 3.37893 4.32118L0.183127 1.08397C0.0956969 0.995448 0.0361497 0.882646 0.0120202 0.759832C-0.0121094 0.637018 0.000263223 0.509713 0.0475724 0.394025C0.0948816 0.278337 0.175001 0.179466 0.277793 0.109923C0.380584 0.0403799 0.501428 0.0032902 0.625033 0.00334696Z" fill="#212137"/>
          </svg>
      </span>
<!--      <i class="fa fa-chevron-down" data-type="arrow"></i>-->
    </div>
    <div class="select__dropdown">
      <ul class="select__list">
        ${items.join('')}
      </ul>
    </div>
  `
}

class Select {
    constructor(selector, options) {
        this.$el = document.querySelector(selector)
        this.options = options
        this.selectedId = options.selectedId

        this.#render()
        this.#setup()
    }

    #render() {
        const {placeholder, data} = this.options
        this.$el.classList.add('select')
        this.$el.innerHTML = getTemplate(data, placeholder, this.selectedId)
    }

    #setup() {
        this.clickHandler = this.clickHandler.bind(this)
        this.$el.addEventListener('click', this.clickHandler)
        // this.$arrow = this.$el.querySelector('[data-type="arrow"]')
        this.$value = this.$el.querySelector('[data-type="value"]')
    }

    clickHandler(event) {
        const {type} = event.target.dataset

        if (type === 'input') {
            this.toggle()
        } else if (type === 'item') {
            const id = event.target.dataset.id
            this.select(id)
        } else if (type === 'backdrop') {
            this.close()
        }
    }

    get isOpen() {
        return this.$el.classList.contains('open')
    }

    get current() {
        return this.options.data.find(item => item.id === this.selectedId)
    }

    select(id) {
        this.selectedId = id
        this.$value.textContent = this.current.value

        this.$el.querySelectorAll('[data-type="item"]').forEach(el => {
            el.classList.remove('selected')
        })
        this.$el.querySelector(`[data-id="${id}"]`).classList.add('selected')

        this.options.onSelect ? this.options.onSelect(this.current) : null

        this.close()
    }

    toggle() {
        this.isOpen ? this.close() : this.open()
    }

    open() {
        this.$el.classList.add('open')
        // this.$arrow.classList.remove('fa-chevron-down')
        // this.$arrow.classList.add('fa-chevron-up')
    }

    close() {
        this.$el.classList.remove('open')
        // this.$arrow.classList.add('fa-chevron-down')
        // this.$arrow.classList.remove('fa-chevron-up')
    }

    destroy() {
        this.$el.removeEventListener('click', this.clickHandler)
        this.$el.innerHTML = ''
    }
}