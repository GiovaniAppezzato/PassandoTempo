/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/usuario/editar-perfil.js ***!
  \***********************************************/
$(document).ready(function () {
  $('#imagem_perfil').change(function () {
    var valueFile = $(this).val().split('\\').pop();
    valueFile == '' ? valueFile = 'Nenhuma imagem selecionada' : '';
    $('#exibirArquivo').html(valueFile);
  });
  $('#atualizarPerfil').click(function () {
    $(this.parentNode).append('<div>Atualizando <i class="animate-spin ml-2 fas fa-spinner"></i></div>');
    this.classList.add('hidden');
  });
});
/******/ })()
;