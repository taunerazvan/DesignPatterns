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
        $lessons[] = new Seminar(4, new TimedCostStrategy());
        $lessons[] = new Lecture(4, new FixedCostStrategy());
        $lessons[] = new Lecture(5, new FixedCostStrategy());
        $lessons[] = new Lecture(6, new FixedCostStrategy());
        $lessons[] = new Lecture(7, new FixedCostStrategy());
        $lessons[] = new Lecture(8, new FixedCostStrategy());

        foreach ($lessons as $lesson) {
            print "lesson charge {$lesson->cost()}. ";
            echo '<br>';
            print "Charge type: {$lesson->chargeType()}\n";
        }
    }
}

$a = new StrategyPattern;
$a->testStrategyPattern();
