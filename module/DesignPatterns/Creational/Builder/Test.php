<?php
namespace DesignPatterns\Creational\Builder;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        echo '<pre>';
        print_r($newVehicle);

        //$this->assertInstanceOf(Truck::class, $newVehicle);
    }
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        echo '<pre>';
        print_r($newVehicle);
        //$this->assertInstanceOf(Car::class, $newVehicle);
    }
}

$parser = new DirectorTest();

var_dump($parser->testCanBuildTruck());
var_dump($parser->testCanBuildCar());

die('xxxx');