<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\Notifier as Notifier;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "TEXT notification: {$message}\n";
    }
}