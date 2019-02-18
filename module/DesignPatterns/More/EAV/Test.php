<?php

namespace DesignPatterns\More\EAV;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Entity;
use DesignPatterns\More\EAV\Value;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCanAddAttributeToEntity()
    {
        $colorAttribute = new Attribute('color');

        $colorSilver = new Value($colorAttribute, 'silver');
        $colorBlack  = new Value($colorAttribute, 'black');

        $memoryAttribute = new Attribute('memory');

        $memory8Gb = new Value($memoryAttribute, '8GB');

        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

        echo '<pre>';
        var_dump($entity);
        die('xxx');

        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}


$a = new Test;
$a->testCanAddAttributeToEntity();