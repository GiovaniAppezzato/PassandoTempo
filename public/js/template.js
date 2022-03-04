/**
 * Arquivo JS que controla comportamento do layout
 */
import Modal from "./modules/Modal.js";
import Slider from "./modules/Slider.js";
import { resize } from "./modules/resize.js";

function ativarScroll()
{
    document.body.style.overflow = 'auto';
    document.body.scroll = "yes";
}

function bloquearScroll()
{
    document.body.style.overflow = 'hidden';
    document.body.scroll = "no";
}

$(document).ready(() => {
    const menu         = $('#menu');
    const checkboxMenu = $('#checkboxMenu');

    if(menu[0] && checkboxMenu[0]) {
        function abrirMenu()
        {
            menu.addClass('mobile-menu');
            $('#backgroundMenu').addClass('is-visible');

            bloquearScroll();
        }

        function fecharMenu()
        {
            menu.removeClass('mobile-menu');
            $('#backgroundMenu').removeClass('is-visible');

            ativarScroll()
        }

        checkboxMenu.change(() => checkboxMenu[0].checked ? abrirMenu() : fecharMenu())
    }

    /**
     * auto resize textarea
     */
    const textareas = document.querySelectorAll('[data-textarea=resize]');

    function textAutoResize() {
        this.style.height = "auto";
        this.style.height =  `${this.scrollHeight + 4}px`;
    }

    textareas.forEach(textarea => {
        textarea.addEventListener("load", textAutoResize);
        textarea.addEventListener("input", textAutoResize);
    });

    /**
     * redimensionado elementos HTML [events: DOMContentLoaded && resize]
     */
    const resizes = document.querySelectorAll('[data-resize]');

    if (resizes.length) {
        resize(resizes)
        window.addEventListener('resize', () => resize(resizes))
    }

    /**
     * Comportamento de dropdown simples
     */
    const dropdowns = document.querySelectorAll('[data-toggle=dropdown]');

    function dropdown(event)
    {
        event.stopPropagation()

        const element = this.nextElementSibling;
        const active  = element.classList.contains('dropdown-active') || element.classList.contains('dropdown-animate')
            ? true
            : false

        const hasAnimate = this.getAttribute('data-dropdown') == 'animate'
            ? true
            : false;

        /**
         * Hidden dropdowns sensíveis
         */
        let dropdowns = document.querySelectorAll('[data-dropdown-sensible]');

        dropdowns.forEach(dropdown => {
            let element = dropdown.nextElementSibling;

            const classe = dropdown.getAttribute('data-dropdown') == 'animate'
                ? 'dropdown-animate'
                : 'dropdown-active';

            element.classList.remove(classe);
            classe == 'dropdown-animate' ? element.style.display = 'none' : '';
        });

        /**
         * Show/Hidden dropdown
         */
        if(!active) {
            switch (hasAnimate) {
                case true:
                    element.style.display = 'block';

                    setTimeout(() => {
                        element.classList.add('dropdown-animate');
                        window.addEventListener('click', dropdownsOutside);
                        window.addEventListener('scroll', dropdownScroll);
                    }, 10)

                    break;

                case false:
                    element.classList.add('dropdown-active');
                    window.addEventListener('click', dropdownsOutside);
                    window.addEventListener('scroll', dropdownScroll);

                    break;

            }
        } else {
            switch (hasAnimate) {
                case true:
                    element.classList.remove('dropdown-animate');
                    element.style.display = 'none';

                    break;

                case false:
                    element.classList.remove('dropdown-active');

                    break;

            }
        }
    }

    /**
     * Fechando dropdowns sensiveis com click fora
     */
    function dropdownsOutside(event)
    {
        const target = event.target;
        const hasDropdown = target.closest('.dropdown-animate') !== null || target.closest('.dropdown-active') !== null
            ? true
            : false;

        if (!hasDropdown) {
            let dropdowns = document.querySelectorAll('[data-dropdown-sensible]');

            dropdowns.forEach(dropdown => {
                let element = dropdown.nextElementSibling;

                const classe = dropdown.getAttribute('data-dropdown') == 'animate'
                    ? 'dropdown-animate'
                    : 'dropdown-active';

                element.classList.remove(classe);
                classe == 'dropdown-animate' ? element.style.display = 'none' : '';
            });

            window.removeEventListener('click', dropdownsOutside)
            window.removeEventListener('scroll', dropdownScroll)
        }
    }

    /**
     * Fechando dropdowns sensiveis com scroll da página
     */
    function dropdownScroll()
    {
        let dropdowns = document.querySelectorAll('[data-dropdown-sensible]');

        dropdowns.forEach(dropdown => {
            let element = dropdown.nextElementSibling;

            const classe = dropdown.getAttribute('data-dropdown') == 'animate'
                ? 'dropdown-animate'
                : 'dropdown-active';

            element.classList.remove(classe);
            classe == 'dropdown-animate' ? element.style.display = 'none' : '';
        });

        window.removeEventListener('click', dropdownsOutside)
        window.removeEventListener('scroll', dropdownScroll)
    }

    dropdowns.forEach(item => {
        item.addEventListener('click', dropdown);
    });

    /**
     * Iniciando todos modais da página
     */
    const modalsCollections = document.querySelectorAll('[data-modal]');
    let modals = [...modalsCollections];

    modals = modals.map(modal => new Modal(modal));

    /**
     * Instanciando todos sliders da página
     */
    const sliderCollections = document.querySelectorAll('[data-slider]');
    sliderCollections.forEach(slider => new Slider(slider));
})
