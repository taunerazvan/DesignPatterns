<?php

namespace DesignPatterns\More\StrategyPattern;

use DesignPatterns\More\StrategyPattern\MailNotifier as MailNotifier;
use DesignPatterns\More\StrategyPattern\TextNotifier as TextNotifier;

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        if (rand(1, 2) === 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }
    abstract public function inform($message);
}