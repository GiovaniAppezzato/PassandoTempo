export default class Slider
{
    constructor(sliderHTML)
    {
        this.sliderHTML = sliderHTML;
        this.sliderAtual = 0;
        this.id = sliderHTML.getAttribute('id');
        this.length = Number.parseInt(sliderHTML.getAttribute('data-slider'));
        this.translateX = (100 / this.length);

        document.querySelector(`[data-next=${this.id}]`).addEventListener('click', () => this.nextSlider())
        document.querySelector(`[data-previous=${this.id}]`).addEventListener('click', () => this.previousSlider())

    }

    nextSlider()
    {
        this.sliderAtual !== (this.length - 1) ? this.sliderAtual++ : this.sliderAtual = 0;
        this.sliderHTML.style.transform = `translateX(-${this.sliderAtual * this.translateX}%)`;
    }

    previousSlider()
    {
        this.sliderAtual !== 0 ? this.sliderAtual-- : this.sliderAtual = (this.length - 1);
        this.sliderHTML.style.transform = `translateX(-${this.sliderAtual * this.translateX}%)`;
    }
}
