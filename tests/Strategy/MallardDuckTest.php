<?php

declare(strict_types=1);

namespace DesignPatterns\Test\Strategy;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Strategy\Duck;
use DesignPatterns\Strategy\Controllers\FlyWithWingsController;
use DesignPatterns\Strategy\Controllers\SqueakController;

final class MallardDuckTest extends TestCase
{
    private $duck;

    protected function setUp(): void
    {
        $this->duck = new Duck(new FlyWithWingsController(), new SqueakController());
    }

    public function testMallardDuckFly()
    {
        $flying = $this->duck->fly();

        $this->assertEquals('Flying!', $flying);
    }

    public function testMallardDuckQuack()
    {
        $quacking = $this->duck->quack();

        $this->assertEquals('Squeak!', $quacking);
    }
}