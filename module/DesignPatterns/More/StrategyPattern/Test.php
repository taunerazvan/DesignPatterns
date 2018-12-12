<?php

namespace DesignPatterns\More\StrategyPattern;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class StrategyPattern extends TestCase
{
    public function testStrategyPattern()
    {
        $lessons1 = new Seminar(4, new TimedCostStrategy());
        $lessons2 = new Lecture(4, new FixedCostStrategy());

        $mgr = new RegistrationMgr();

        $mgr->register($lessons1);
        $mgr->register($lessons2);

    }
}

$a = new StrategyPattern;
$a->testStrategyPattern();
