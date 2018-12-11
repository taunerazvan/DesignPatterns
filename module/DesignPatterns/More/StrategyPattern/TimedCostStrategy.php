<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\Lesson as Lesson;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return ($lesson->getDuration() * 5);
    }
    public function chargeType(): string
    {
        return "hourly rate";
    }
}