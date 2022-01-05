import Modal from "./modules/Modal.js";

export function ativarScroll()
{
    document.body.style.overflow = 'auto';
    document.body.scroll = "yes";
}

export function desativarScroll()
{
    document.body.style.overflow = 'hidden';
    document.body.scroll = "no";
}

/* ===== Modals ===== */
const colectionsModals = document.querySelectorAll('[data-modal]');
let modals = [...colectionsModals];

modals = modals.map(modal => new Modal(modal));
