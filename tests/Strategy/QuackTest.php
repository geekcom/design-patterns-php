<?php

declare(strict_types=1);

namespace DesignPatterns\Test\Strategy;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Strategy\Controllers\QuackController;
use DesignPatterns\Strategy\Controllers\SqueakController;
use DesignPatterns\Strategy\Controllers\MuteQuackController;

final class QuackTest extends TestCase
{
    private $quack;
    private $squeak;
    private $muteQuack;

    protected function setUp(): void
    {
        $this->quack = new QuackController();
        $this->squeak = new SqueakController();
        $this->muteQuack = new MuteQuackController();
    }

    public function testQuack()
    {
        $quack = $this->quack->quack();

        $this->assertEquals('Quack!', $quack);
    }

    public function testSqueak()
    {
        $squeak = $this->squeak->quack();

        $this->assertEquals('Squeak!', $squeak);
    }

    public function testMuteQuack()
    {
        $muteQuack = $this->muteQuack->quack();

        $this->assertEquals('No sound!', $muteQuack);
    }
}