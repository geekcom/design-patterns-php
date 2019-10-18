<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Controllers;

use DesignPatterns\Strategy\Contracts\QuackBehaviorContract;

class SqueakController implements QuackBehaviorContract
{
    public function quack(): string
    {
        return 'Squeak!';
    }
}