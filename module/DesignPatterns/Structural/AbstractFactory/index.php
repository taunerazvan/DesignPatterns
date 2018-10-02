<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/www/html/github/vendor/autoload.php';

use DesignPatterns\Structural\AbstractFactory\User as User;

$a = new User;

var_dump($a);
die('xxx');
