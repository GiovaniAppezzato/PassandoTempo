/**
 * Redimensionamento de elementos HTML para uma proporção especifica.
 * @param  {[object/HTML]} elements
 * @param  {[string]} proportion [16:9, 4:3, ...]
 */
export function resize(elements = null, proportion = false) {

    const controll = {
        elements: elements,
        prop: proportion
    }

    controll.elements.forEach(element => {

        const proportion = !controll.prop
            ? element.getAttribute('data-resize').split(':')
            : controll.prop.split(':');

        const width = element.offsetWidth;
        element.style.height = `${(width * proportion[1]) / proportion[0]}px`;
    });
}
