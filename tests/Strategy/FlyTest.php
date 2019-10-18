<?php

declare(strict_types=1);

namespace DesignPatterns\Test\Strategy;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Strategy\Controllers\FlyNoWayController;
use DesignPatterns\Strategy\Controllers\FlyWithWingsController;

final class FlyTest extends TestCase
{
    private $flyWithWings;
    private $flyNoWay;

    protected function setUp(): void
    {
        $this->flyWithWings = new FlyWithWingsController();
        $this->flyNoWay = new FlyNoWayController();
    }

    public function testFlyWithWings()
    {
        $flyWithWings = $this->flyWithWings->fly();

        $this->assertEquals('Flying!', $flyWithWings);
    }

    public function testFlyNoWay()
    {
        $flyNoWay = $this->flyNoWay->fly();

        $this->assertEquals('Fly no way!', $flyNoWay);
    }
}