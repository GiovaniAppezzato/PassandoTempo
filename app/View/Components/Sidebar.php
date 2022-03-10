<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * indicar o item ativado no sidebar
     * @var string
     */
    public $itemActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($itemActive = null)
    {
        $this->itemActive = trim($itemActive);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.sidebar');
    }
}
