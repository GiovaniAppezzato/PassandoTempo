import EditorJS from '@editorjs/editorjs';
import Paragraph from '@editorjs/paragraph';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Marker from './plugins/Marker.js';
import CodeTool from './plugins/codeTool/CodeTool.js';

const article = new EditorJS({
    /**
     * holder: seletor do container
     */
    holder: 'article',
    placeholder: 'Explore sua criativade',
    /**
     * tools: config das ferramentas disponiveis no editor
     */
    tools: {
        paragraph: {
            class: Paragraph,
            inlineToolbar: true
        },
        header: {
            class: Header,
            inlineToolbar: true
        },
        list: {
            class: List,
            inlineToolbar: true
        },
        code: {
            class: CodeTool,
            inlineToolbar: true,
            config: { placeholder: 'Coloque o código' }
        },
        marker: {
            class: Marker,
            shortcut: 'CMD+SHIFT+M'
        },
    },
    /**
     * Autofocus on/off
     */
    autofocus: false,
    data: {}
});
