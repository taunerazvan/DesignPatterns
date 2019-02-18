<?php

namespace DesignPatterns\Behavioral\Strategy\Tests;

namespace DesignPatterns\Behavioral\Strategy;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';


$lessons1 = new Seminar(4, new TimedCostStrategy());
$lessons2 = new Lecture(4, new FixedCostStrategy());

$mgr = new RegistrationMgr();
echo '<br>';
echo '<pre>';
print_r($mgr);
echo '<br>';
print_r($lessons1);
echo '<br>';
print_r($lessons2);
echo '<br>';
echo '<br>';
var_dump($mgr->register($lessons1));
echo '<br>';
var_dump($mgr->register($lessons2));


exit();
$a = new Seminar(4, new TimedCostStrategy());
echo '<pre>';
print_r($a->cost());
die('xxx');

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Seminar(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "lesson charge {$lesson->cost()}. <br>";
    print "Charge type : {$lesson->chargeType()}\n<br>";
    print "Get Duration: {$lesson->getDuration()}\n<br><br>";
}
