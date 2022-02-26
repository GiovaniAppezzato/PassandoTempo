import Editor from './Editor.js';
import { resize } from '../modules/resize.js';

$(document).ready(() => {

    const controller = {
        initiated: false,
        transition: 200,

        concluded: {
            'titulo': null,
            'descricao': null,
            'imagem': null,
            'tema': null,
            'conteudo': null
        },

        wrappers: {
            init: $('#init'),
            create: $('#create'),
            preview: $('#preview'),
            result: $('#result')
        },

        currentWrapper: $('#init')
    }

    controller.required = Object.keys(controller.concluded).length;

    /**
     * iniciando EditorJS
     */
    const editor = new Editor({
        id: 'article',
        onChange: (api, event) => changeArticle()
    });

    /**
     * Trocar wrapper atual.
     * @param  {[property||Element Jquery]} nextWrapper
     */
    function change(nextWrapper)
    {
        controller.currentWrapper.fadeOut(controller.transition);

        setTimeout(() => {
            nextWrapper.fadeIn(controller.transition);
            resize(document.querySelectorAll('#wrapper_preview'), '16:9');

        }, controller.transition);

        controller.currentWrapper = nextWrapper;
    }

    /**
     * Salvar POSTAGEM
     */
    function save()
    {
        const data = controller.concluded;
        console.log(data)

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/postagem/store',
            type: 'POST',

            data: {
                titulo: data.titulo,
                descricao: data.descricao,
                imagem: data.imagem,
                tema: data.tema,
                conteudo: JSON.stringify(data.conteudo),
            },
            dataType: 'JSON',

            success: (response) => console.log(response)
        });
    }

    /**
     * Atualizar progresso do usuário.
     */
    function update()
    {
        let concluido = Object.values(controller.concluded)
            concluido = concluido.filter(item => { return item !== null ? true : false }).length;

        const porcentagem = ((concluido / controller.required) * 100).toString().substring(0, 3);

        $('#progressBar').css('width', `${porcentagem}%`);
        $('#progressNumber').html(`${porcentagem}%`);

        $('#currentProgress').html(`Concluido ${concluido} de ${controller.required}`);
    }

    $('#initButton').click(() => {
        controller.initiated = true;

        change(controller.wrappers['create']);
        update();
    });

    function accountant(seletor, length, maxLength)
    {
        if(length >= maxLength) {
            $(seletor).html(`Máximo de Caracteres <i class="fa-solid fa-triangle-exclamation"></i>`);
            $(seletor).addClass('text-red-500')
        } else {
            $(seletor).html(`${length} - Caracteres`);
            $(seletor).removeClass('text-red-500')
        }
    }

    $('#title').keyup(function() {
        const value  = this.value.trim();
        const length = value.length;

        accountant('#titleCount', length, 180);

        length >= 10 && length <= 180
            ? controller.concluded['titulo'] = this.value
            : controller.concluded['titulo'] = null

        update();
    })

    $('#description').keyup(function() {
        const value  = this.value.trim();
        const length = value.length;

        accountant('#descriptionCount', length, 560);

        length >= 25 && length <= 560
            ? controller.concluded['descricao'] = this.value
            : controller.concluded['descricao'] = null

        update();
    })

    $('input[name="tema"]').change(function() {
        const classes = 'bg-indigo-500 text-white ring-2';

        controller.concluded['tema'] = this.value;
        update();

        $('input[name="tema"]').each((index, radio) => {
            const label = $(`[for=${$(radio).attr('id')}]`);
            this == radio ? label.addClass(classes) : label.removeClass(classes) ;
        });

        $('#currentTema').html(`Tema selecionado: ${this.value}`);
    });

    $('#imagem_postagem').change(function() {
        const hasFile = this.files[0] || false;

        if (hasFile) {
            const preview = document.createElement('img')
            const src = URL.createObjectURL(hasFile);

            $(preview).addClass('object-cover object-center h-full w-full');
            $(preview).attr('src', src);

            preview.onload = () => {
                 URL.revokeObjectURL(src);
                 $('#preview_imagem').html(preview);
            };

            // controller.concluded['imagem'] = this.files[0];
            controller.concluded['imagem'] = $(this).val().split('\\').pop();

        } else {
            $('#preview_imagem').html('<i class="text-2xl text-gray-600 fa-solid fa-image"></i>');
            controller.concluded['imagem'] = null;
        }

        update();
    })

    async function changeArticle()
    {
        const data = await editor.getContent();

        data.blocks.length > 0
            ? controller.concluded['conteudo'] = data
            : controller.concluded['conteudo'] = null;

        update();
    }

    $('#save').click(() => save())
});
