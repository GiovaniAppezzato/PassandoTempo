<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const MESSAGES = [
        'error_system' => 'Ocorreu um erro no sistema ...',
    ];

    public function notify_error():void
    {
        session()->flash('warning', self::MESSAGES['error_system']);
    }

    public function notify($type, $message):void
    {
        session()->flash(strtolower($type), $message);
    }
}
