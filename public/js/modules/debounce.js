/**
 * Função feita para evitar que uma evento seja disparado várias vezes dentro de um intervalo de tempo.
 * @param  {Function} fn
 * @param  {Number}
 * @return {[Function]}
 */
export function debounce(fn, tempo = 1000)
{
    let controle = null;

    return function() {
        clearTimeout(controle);
        controle = setTimeout(() => fn.apply(this, arguments), tempo)
    }
}
