export default class Marker {
    /**
     * Informar que é uma ferramenta "inline"
     */
    static get isInline()
    {
        return true
    }

    constructor({api, config})
    {
        this.api = api;
        this.button = null;

        this.tag = 'MARK';
        this.class = 'cdx-marker';
    }

    /**
     * Retorna o elemento HTML do botão para a barra de ferramentas.
     * @param {elementHTML}
     */
    render() {
        this.button = document.createElement('button');
        this.button.type = 'button';
        this.button.classList.add(this.api.styles.inlineToolButton);
        this.button.innerHTML = '<svg width="20" height="18"><path d="M10.458 12.04l2.919 1.686-.781 1.417-.984-.03-.974 1.687H8.674l1.49-2.583-.508-.775.802-1.401zm.546-.952l3.624-6.327a1.597 1.597 0 0 1 2.182-.59 1.632 1.632 0 0 1 .615 2.201l-3.519 6.391-2.902-1.675zm-7.73 3.467h3.465a1.123 1.123 0 1 1 0 2.247H3.273a1.123 1.123 0 1 1 0-2.247z"/></svg>';

        return this.button;
    }

    /**
     * adicionar ou remover marcação
     * @param range
     */
    surround(range)
    {
        if (!range) {
          return;
        }

        let wrapper = this.api.selection.findParentTag(this.tag, this.class);
        wrapper ? this.unwrap(wrapper) : this.wrap(range);
    }

    /**
     * Chamado quando um trecho é selecionado, verificando e atualizando caso contiver alguma marcação.
     */
    checkState()
    {
        let hasWrapper = this.api.selection.findParentTag(this.tag, this.class);
        this.button.classList.toggle(this.api.styles.inlineToolButtonActive, !!hasWrapper);
    }

    /**
     * Adicionar marcação
     * @param range
     */
    wrap(range)
    {
        const marker = document.createElement(this.tag);
        marker.classList.add(this.class)

        marker.appendChild(range.extractContents());
        range.insertNode(marker);

        this.api.selection.expandToTag(marker);
    }

    /**
     * Remover marcação
     * @param range
     */
    unwrap(wrapper)
    {
        this.api.selection.expandToTag(wrapper);

        let selection = window.getSelection();
        let range = selection.getRangeAt(0);

        /**
         * Colentando conteúdo
         */
        const wrapperContent = range.extractContents();
        /**
         * removendo TAG
         */
        wrapper.parentNode.removeChild(wrapper);
        /**
         * Devolvendo o conteúdo
         */
        range.insertNode(wrapperContent)

        selection.removeAllRanges();
        selection.addRange(range)
    }

    /**
     * Evitar a remoção da marcação na sanitização
     * @return {object}
     */
    static get sanitize()
    {
        return {
            mark: { class: 'cdx-marker' }
        };
    }
}
