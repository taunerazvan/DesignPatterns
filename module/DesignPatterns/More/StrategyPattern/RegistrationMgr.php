<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\Lesson as Lesson;

class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }
}