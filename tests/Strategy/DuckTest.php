<?php

declare(strict_types=1);

namespace DesignPatterns\Test\Strategy;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Strategy\Duck;
use DesignPatterns\Strategy\Controllers\FlyWithWingsController;
use DesignPatterns\Strategy\Controllers\QuackController;

final class DuckTest extends TestCase
{
    private $duck;

    protected function setUp(): void
    {
        $this->duck = new Duck(new FlyWithWingsController(), new QuackController());
    }

    public function testDuckFly()
    {
        $flying = $this->duck->fly();

        $this->assertEquals('Flying!', $flying);
    }

    public function testDuckQuack()
    {
        $quacking = $this->duck->quack();

        $this->assertEquals('Quack!', $quacking);
    }
}