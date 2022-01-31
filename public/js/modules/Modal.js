import { ativarScroll, desativarScroll } from "../frontend.js";

export default class Modal {
    constructor(elementoHTML)
    {
        this.elementoHTML = elementoHTML
        this.modal = elementoHTML.getAttribute('id');
        this.buttonsOpen = document.querySelectorAll(`[data-target=${this.modal}]`)
        this.buttonsClose = document.querySelectorAll(`[data-close=${this.modal}]`)

        this.abrirModal = this.abrirModal.bind(this);
        this.fecharModal = this.fecharModal.bind(this);

        if(this.buttonsOpen.length !== 0) {
            this.buttonsOpen.forEach(button => button.addEventListener('click', this.abrirModal))
        }

        if(this.buttonsClose.length !== 0) {
            this.buttonsClose.forEach(button => button.addEventListener('click', this.fecharModal))
        }
    }

    abrirModal()
    {
        this.elementoHTML.classList.add('modal-show');
        desativarScroll();
    }

    fecharModal()
    {
        this.elementoHTML.classList.remove('modal-show');
        ativarScroll();
    }
}
