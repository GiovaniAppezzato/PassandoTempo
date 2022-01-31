<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App-auth extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $titulo;

     public function __construct($titulo = 'PassandoTempo')
     {
         $this->titulo = $titulo;
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app-auth');
    }
}
