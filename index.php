<?php

require __DIR__ . '/vendor/autoload.php';

use DesignPatterns\Strategy\Duck;
use DesignPatterns\Strategy\Controllers\FlyWithWingsController;
use DesignPatterns\Strategy\Controllers\QuackController;
use DesignPatterns\Strategy\Controllers\SqueakController;

/**
 * Simple duck
 */
$duck = new Duck(new FlyWithWingsController(), new QuackController());

$flying = $duck->fly();
$quacking = $duck->quack();

echo 'This is a simple duck:' . PHP_EOL;
echo $flying . PHP_EOL;
echo $quacking . PHP_EOL;

echo PHP_EOL;

/**
 * mallard duck
 */
$mallardDuck = new Duck(new FlyWithWingsController(), new SqueakController());

$mallardDuckFlying = $mallardDuck->fly();
$mallardDuckQuacking = $mallardDuck->quack();

echo 'This is a mallard duck:' . PHP_EOL;
echo $mallardDuckFlying . PHP_EOL;
echo $mallardDuckQuacking . PHP_EOL;