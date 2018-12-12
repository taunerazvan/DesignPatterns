<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\Lesson as  Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }
    public function chargeType(): string
    {
        return "fixed rate";
    }
}