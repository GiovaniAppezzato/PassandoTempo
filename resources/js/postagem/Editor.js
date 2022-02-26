import EditorJS from '@editorjs/editorjs';
/**
 * Plugins editor
 */
import Paragraph from '@editorjs/paragraph';
import Checklist from '@editorjs/checklist';
import Header from '@editorjs/header';
import Quote from '@editorjs/quote';
import Embed from '@editorjs/embed';
import List from '@editorjs/list';
import Marker from './plugins/Marker.js';
import CodeTool from './plugins/codeTool/index.js';

/**
 * Init & config EdiotorJS
 */
export default class Editor {
    constructor(options) {
        this.editor = undefined;

        this._options = {
            holder: options.id || null,
            data: options.data || {},
            autofocus: options.autofocus || false,
            placeholder: options.placeholder || '',
            readOnly: options.readOnly || false,

            onReady: options.onReady || null,
            onChange: options.onChange|| null
        }

        this.init();
    }

    init()
    {
        this.editor = new EditorJS({
            holder: this._options.holder,
            data: this._options.data,
            autofocus: this._options.autofocus,
            placeholder: this._options.placeholder,
            readOnly: this._options.readOnly,

            onReady: this._options.onReady,
            onChange: this._options.onChange,

            tools: {
                paragraph: {
                    class: Paragraph,
                    inlineToolbar: true
                },
                header: {
                    class: Header,
                    inlineToolbar: ['bold', 'link', 'marker'],
                    config: {
                        levels: [1, 2, 3],
                        defaultLevel: 2
                    }
                },
                list: {
                    class: List,
                    inlineToolbar: true
                },
                checklist: {
                    class: Checklist,
                    inlineToolbar: true
                },
                quote: {
                    class: Quote,
                    inlineToolbar: true,
                    config: {
                        quotePlaceholder: 'Coloque a citação',
                        captionPlaceholder: 'Autor',
                    },
                },
                code: {
                    class: CodeTool,
                    inlineToolbar: true,
                    config: { placeholder: 'Coloque o código' }
                },
                embed: {
                    class: Embed,
                    config: {
                        services: {
                            youtube: true
                        }
                    }
                },
                marker: {
                    class: Marker,
                    shortcut: 'CMD+SHIFT+M'
                }
            }
        });
    }

    async getContent()
    {
        const data = await this.editor.save().catch((error) => this.getError(error));
        return data;
    }

    /**
     * recuperar o erro ao tentar coletar o conteúdo do editor
     * @param  {[object]} error
     * @return {boolean}
     */
    getError(error)
    {
        console.log('Saving failed: ', error);
        return false;
    }
}
/* EXEMPLO DA SAIDA JSON:

const data = {
    "time": 1644870167602,
    "blocks": [
        {
            "id" : "A8keFSee7L",
            "type" : "header",
            "data" : {
                "text" : "Header - 1",
                "level" : 1
            }
        },
        {
            "id" : "IOoanEound",
            "type" : "header",
            "data" : {
                "text" : "Header - 2",
                "level" : 2
            }
        },
        {
            "id" : "8ZujBcd_tf",
            "type" : "header",
            "data" : {
                "text" : "Header - 3",
                "level" : 3
            }
        },
        {
            "id" : "8ZujBcd_tf",
            "type" : "paragraph",
            "data" : {
                "text" : "Texto, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"
            }
        },
        {
            "id" : "JeKIVWU3K7",
            "type" : "paragraph",
            "data" : {
                "text" : "<mark class=\"cdx-marker\">Marker</mark> - <a href=\"http://127.0.0.1:8000/\">link</a> - <b>bold</b> - <i>italic</i>"
            }
        },
        {
            "id" : "Are4DButPY",
            "type" : "list",
            "data" : {
                "style" : "ordered",
                "items" : [
                    "Item 01",
                    "Item 02",
                    "Item 03"
                ]
            }
        },
        {
            "id" : "FcDwpNvbuj",
            "type" : "list",
            "data" : {
                "style" : "unordered",
                "items" : [
                    "Item 01",
                    "Item 02",
                    "Item 03"
                ]
            }
        },
        {
            "type" : "checklist",
            "data" : {
                "items" : [
                    {
                      "text" : "Checklist 01",
                      "checked" : true
                    },
                    {
                      "text" : "Checklist 01",
                      "checked" : false
                    },
                    {
                      "text" : "Checklist 01",
                      "checked" : true
                    }
                ]
            }
        },
        {
            "id" : "yGFzY65pRG",
            "type" : "quote",
            "data" : {
                "text" : "Nunca existiu uma grande inteligência sem uma veia de loucura.",
                "caption" : "Aristóteles",
                "alignment" : "center"
            }
        },
        {
            "type" : "code",
            "data" : {
                "code": "import EditorJS from '@editorjs/editorjs';\nimport Paragraph from '@editorjs/paragraph';",
            }
        }
    ]
}
*/
