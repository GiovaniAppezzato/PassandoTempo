<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $titulo, $sidebarLoaded, $sidebarActive;

    public function __construct($titulo = 'PassantoTempo', $sidebarLoaded = 'expand', $sidebarActive = null)
    {
        $this->titulo = $titulo;

        $this->sidebarLoaded = $sidebarLoaded;
        $this->sidebarActive = $sidebarActive;
    }

    /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */

    public function render()
    {
        return view('components.app');
    }
}
