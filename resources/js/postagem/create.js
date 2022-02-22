import Editor from './Editor.js';
import { resize } from '../modules/resize.js';

$(document).ready(() => {
    /**
     * iniciando EditorJS
     */
    const editor = new Editor({id: 'article'});

    const controller = {
        initiated: false,
        step: null,
        stepLength: $('[data-wrapper]').length,

        concluded: {
            'titulo': false,
            'descrição': false,
            'imagem': false,
            'tema': false,
            'conteudo': false
        },

        wrappers: {
            init: $('#init'),
            1: $('[data-wrapper="1"]'),
            2: $('[data-wrapper="2"]'),
            3: $('[data-wrapper="3"]'),
            result: $('#result')
        }
    }

    controller.required = Object.keys(controller.concluded).length;

    $('#initButton').click(() => {
        controller.initiated = true;
        controller.step = 1;

        controller.wrappers.init.fadeOut(300);

        setTimeout(() => {
            controller.wrappers[controller.step].fadeIn();
            $('#wrapperActions').removeClass('hidden');

            resize(document.querySelectorAll('#wrapper_preview'), '16:9');
        }, 300);

        $('#currentStep').text(`Etapa Atual: ${controller.step}`);
    });

    /**
     * @param  {[boolean]} option ['true' => avançar, 'false' => retornar]
     */
    function change(option)
    {
        /**
         * atualizar controlador
         * avançar ou retroceder view/wrapper
         */

        const currentStep = option ? controller.step + 1 : controller.step - 1;

        controller.wrappers[controller.step].fadeOut(300);

        setTimeout(() => {
            controller.wrappers[currentStep].fadeIn();
            resize(document.querySelectorAll('#wrapper_preview'), '16:9');
        }, 300);

        controller.step = currentStep;
        $('#currentStep').text(`Etapa Atual: ${currentStep}`);
    }

    /**
     * Atualizar a barra de progresso
     */
    function update()
    {
        let concluded =  Object.values(controller.concluded);
        concluded = concluded.filter(item => { return item ? true : false }).length;

        const value = ((concluded / controller.required) * 100).toString();

        $('#progressBar').css('width', `${value}%`);
        $('#progressNumber').html(`${value}%`);
    }

    $('#nextButton').click(() => change(true));
    $('#previousButton').click(() => change(false));

    function accountant(length, seletor, maxLength)
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
        const length = this.value.length;
        accountant(length, '#titleCount', 180);

        if(length >= 10 && length <= 180) {
            controller.concluded['titulo'] = true
        } else {
            controller.concluded['titulo'] = false
        }

        update();
    })

    $('#description').keyup(function() {
        const length = this.value.length;
        accountant(length, '#descriptionCount', 560);

        if(length >= 25 && length <= 560) {
            controller.concluded['descrição'] = true
        } else {
            controller.concluded['descrição'] = false
        }

        update();
    })

    $('#imagem_postagem').change(function() {
        const hasFile = this.files[0] || false;

        if(hasFile) {
            const preview = document.createElement('img')
            const src = URL.createObjectURL(hasFile);

            $(preview).addClass('object-cover object-center h-full w-full');
            $(preview).attr('src', src);

            preview.onload = () => {
                 URL.revokeObjectURL(src);
                 $('#preview_imagem').html(preview);
            };

            controller.concluded['imagem'] = true;
        } else {
            $('#preview_imagem').html('<i class="text-2xl text-gray-600 fa-solid fa-image"></i>');
            controller.concluded['imagem'] = false;
        }

        update()
    })

    $('input[name="tema"]').change(function() {
        const classes = 'bg-indigo-500 text-white ring-2';

        $('#temaSelecionado').html(`Tema selecionado: ${this.value}`);

        $('input[name="tema"]').each((index, radio) => {
            const label = $(`[for=${$(radio).attr('id')}]`);
            this == radio ? label.addClass(classes) : label.removeClass(classes) ;
        });

        controller.concluded['tema'] = true;
        update()
    });

    $('#buttonContent').click(() => editor.getContent())
});
