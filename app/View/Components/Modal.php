<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $modal, $type, $title, $position, $typeClose;

    public function __construct(
        $modal = null,
        $type = 'default',              // <-- ['default, ''success', 'danger', 'warning']
        $title = 'Atenção usuário',
        $position = 'top',              // <-- ['top', 'center']
        $typeClose = 'default')         // <-- ['default', 'square']
    {
        $this->modal = $modal;
        $this->type = $type;
        $this->title = $title;
        $this->position = $position;
        $this->typeClose = $typeClose;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
