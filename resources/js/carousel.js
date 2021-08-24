import {Carousel} from 'caroucssel';

const els = Array.from(document.querySelectorAll('.carousel'));

els.forEach( (el) => {
  let classes = el.classList.value.split(' ')
  let carousel = new Carousel(el, {
    hasPagination: classes.indexOf('no-pagination') > -1 ? false : true,
    hasButtons: classes.indexOf('no-buttons') > -1 ? false : true,
    buttonTemplate: ({className, label, title}) =>
        `<button class="${className}" title="${title}">
            ${label}
        </button>`,
    buttonPrevious: {
        className: 'btn-prev w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12',
        title: 'Imagem anterior',
        label: '<i class="fas fa-arrow-left"></i>'
    },
    buttonNext: {
        className: 'btn-next w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12',
        title: 'Próxima imagem',
        label: '<i class="fas fa-arrow-right"></i>'
    }
  });
})