<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Toast extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private const TYPES = ['success', 'danger', 'warning'];
    public $type, $message;

    public function __construct( $type = 'default', $message = null)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.toast');
    }

    public static function getTypes()
    {
        return self::TYPES;
    }
}
