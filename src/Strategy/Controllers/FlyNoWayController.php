<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Controllers;

use DesignPatterns\Strategy\Contracts\FlyBehaviorContract;

class FlyNoWayController implements FlyBehaviorContract
{
    public function fly(): string
    {
        return 'Fly no way!';
    }
}