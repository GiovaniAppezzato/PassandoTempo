$(document).ready(() => {

    $('#imagem_perfil').change(function() {
        let valueFile = $(this).val().split('\\').pop();
        valueFile == '' ? valueFile = 'Nenhuma imagem selecionada' : '';

        $('#exibirArquivo').html(valueFile);
    })

    $('#atualizarPerfil').click(function() {
        $(this.parentNode).append('<div>Atualizando <i class="animate-spin ml-2 fas fa-spinner"></i></div>');
        this.classList.add('hidden');
    })

});
