<?php

namespace DesignPatterns\Behavioral\Strategy;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson) {
        return ($lesson->getDuration() * 5);
    }

    public function chargeType() {
        return "hourly rate";
    }
}