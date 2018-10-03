<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\Creational\SimpleFactory\Bicycle;
use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}