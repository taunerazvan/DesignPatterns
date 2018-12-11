<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\Lesson as Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;
    abstract public function chargeType(): string;
}