<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{
    /**
     * Título da página
     * @var string
     */
    public $title;

    /**
     * passar ao sidebar o seletor do item ativado
     * @var string
     */
    public $navbarActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = 'PassantoTempo', $navbarActive = null)
    {
        $this->title = $title;
        $this->navbarActive = $navbarActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.app.dashboard');
    }
}
