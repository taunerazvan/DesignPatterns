<?php

namespace DesignPatterns\Creational\FactoryMethod\Test;

namespace DesignPatterns\Creational\AbstractFactory\Tests;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        echo '<pre>';
        print_r($logger);

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }
    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        echo '<pre>';
        print_r($logger);

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

$parser = new FactoryMethodTest();


echo '<pre>';
var_dump($parser->testCanCreateStdoutLogging());
echo '<br><br>';
echo '<br><br>';
var_dump($parser->testCanCreateFileLogging());

die('xxxx');