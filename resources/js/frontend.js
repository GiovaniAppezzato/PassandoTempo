import Modal from "./modules/Modal.js";
import Slider from "./modules/Slider.js";
import { resize } from "./modules/resize.js";

function ativarScroll()
{
    document.body.style.overflow = 'auto';
    document.body.scroll = "yes";
}

function desativarScroll()
{
    document.body.style.overflow = 'hidden';
    document.body.scroll = "no";
}

window.addEventListener('DOMContentLoaded', () => {
    let conteudoPagina = document.querySelector('#contentPage');

    /* ===== Menu - nav ===== */
    const menuHTML = document.querySelector('#menu');
    const checkboxMenu = document.querySelector('#checkbox-menu');

    if (menuHTML && checkboxMenu) {
        const backgroundMenu = document.querySelector('#bg-menu-mobile');

        function abrirMenu()
        {
            menuHTML.classList.add('mobile-menu');
            backgroundMenu.classList.add('is-visible');
            desativarScroll();
        }

        function fecharMenu()
        {
            menuHTML.classList.remove('mobile-menu');
            backgroundMenu.classList.remove('is-visible');
            ativarScroll();
        }

        checkboxMenu.addEventListener('change', () => checkboxMenu.checked ? abrirMenu() : fecharMenu())
    }

    /* ===== Resize HTML ===== */
    const resizeColletions = document.querySelectorAll('[data-resize]');

    if (resizeColletions.length) {
        resize(resizeColletions)
        window.addEventListener('resize', () => resize(resizeColletions))
    }

    /* ===== Dropdown ===== */
    const dropdownCollections = document.querySelectorAll('[data-toggle=dropdown]');

    dropdownCollections.forEach(item => {
        item.addEventListener('click', ()=> item.nextElementSibling.classList.toggle('dropdown--active'));
    });

    /* ===== Sidebar ===== */
    const sidebarHTML = document.querySelector('#sidebar');
    const checkboxSidebar = document.querySelector('#checkbox-sidebar');

    function collapseSidebar() {
        checkboxSidebar.checked = true;
        sidebarHTML.classList.add('sidebar--collapse');
        conteudoPagina.classList.add('content-page--expand');

        resize(resizeColletions);
        document.querySelectorAll('[data-sidebar=sublinks').forEach(sublink => sublink.classList.remove('sidebar-dropdown--active'));
    }

    function expandSidebar() {
        checkboxSidebar.checked = false;
        sidebarHTML.classList.remove('sidebar--collapse');
        conteudoPagina.classList.remove('content-page--expand');

        resize(resizeColletions)
    }

    function iniciarSidebar() {
        let loaded = sidebarHTML.getAttribute('sidebar-loaded');
        var active = sidebarHTML.getAttribute('sidebar-active');

        if (loaded !== 'collapse' && (window.innerWidth >= 992 && window.innerWidth < 1280)) {
            collapseSidebar()
        }

        if(active !== null) {
            document.querySelector(active).classList.add('sidebar-item--active');
        }
    }

    if (sidebarHTML && checkboxSidebar) {
        const itemsDropdown = document.querySelectorAll('[data-sidebar=link-collapse]');

        function dropdownSidebar() {
            expandSidebar();
            this.nextElementSibling.classList.toggle('sidebar-dropdown--active');
        }

        iniciarSidebar();
        checkboxSidebar.addEventListener('change', () => checkboxSidebar.checked ? collapseSidebar() : expandSidebar());
        itemsDropdown.forEach(link => link.addEventListener('click', dropdownSidebar));

        window.addEventListener('resize', () => {
            const width = window.innerWidth;

            if((width >= 992 && width < 1280) && !checkboxSidebar.checked) {
                collapseSidebar()
            } else if (width >= 1280 && checkboxSidebar.checked) {
                expandSidebar()
            }
        })
    }

    /* ===== Auto-resize Textarea ===== */
    const textareaCollections = document.querySelectorAll('[data-textarea=resize]');

    function textAutoResize() {
        this.style.height = "auto";
        this.style.height =  `${this.scrollHeight + 4}px`;
    }

    textareaCollections.forEach(textarea => {
        textarea.addEventListener("input", textAutoResize)
    });

    /* ===== Toast ===== */
    const toast = document.querySelector('[data-toast]');

    function showToast(toast, time)
    {
        toast.classList.add('toast-show');
        setTimeout(() => toast.classList.remove('toast-show'), time)
        setTimeout(() => toast.remove(),time + 1000)
    }

    toast ? window.addEventListener('load', () => setTimeout(() => showToast(toast, 4000), 400)) : '';

    /* ===== Modals ===== */
    const modalsCollections = document.querySelectorAll('[data-modal]');
    let modals = [...modalsCollections];

    modals = modals.map(modal => new Modal(modal));

    /* ===== Slider ===== */
    const sliderCollections = document.querySelectorAll('[data-slider]');
    sliderCollections.forEach(slider => new Slider(slider));
})
