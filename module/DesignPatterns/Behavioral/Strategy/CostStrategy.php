<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);

    abstract public function chargeType();
}