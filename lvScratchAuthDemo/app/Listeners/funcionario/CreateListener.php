<?php

namespace App\Listeners\Funcionario;

use App\Events\Funcionario\Created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  created  $event
     * @return void
     */
    public function handle(created $event)
    {
        //
    }
}
