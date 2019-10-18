<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Contracts;

interface QuackBehaviorContract
{
    public function quack(): string;
}