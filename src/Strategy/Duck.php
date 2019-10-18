<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\Contracts\FlyBehaviorContract as FlyBehavior;
use DesignPatterns\Strategy\Contracts\QuackBehaviorContract as QuackBehavior;

class Duck
{
    private $flyBehavior;
    private $quackBehavior;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function fly()
    {
        return $this->flyBehavior->fly();
    }

    public function quack()
    {
        return $this->quackBehavior->quack();
    }
}