/* Redimensionamento de imagens */
export function alterarAltura(imagens) {
    for(let i = 0; i < imagens.length; i++) {
        const larguraAtual = imagens[i].offsetWidth;
        const altura = (larguraAtual * 9) / 16;

        imagens[i].style.height = `${altura}px`;
    }
}
