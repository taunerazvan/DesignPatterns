<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\Creational\AbstractFactory\CsvParser as CsvParser;
use DesignPatterns\Creational\AbstractFactory\JsonParser as JsonParser;
use DesignPatterns\Creational\AbstractFactory\ParserFactory as ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        echo '<pre>';
        print_r($parser);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }
    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();

        echo '<pre>';
        print_r($parser);

        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}

$parser = new AbstractFactoryTest();

var_dump($parser->testCanCreateCsvParser());
var_dump($parser->testCanCreateJsonParser());

die('xxxx');