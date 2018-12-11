<?php

namespace DesignPatterns\Structural\DependencyInjection\Tests;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';


use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');

        echo '<pre>';
        print_r($config);

        $connection = new DatabaseConnection($config);

        echo '<pre>';
        print_r($connection);


        //$this->assertEquals('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}


$a = new DependencyInjectionTest;
$a->testDependencyInjection();
