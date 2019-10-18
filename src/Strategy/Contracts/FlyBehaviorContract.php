<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Contracts;

interface FlyBehaviorContract
{
    public function fly(): string;
}