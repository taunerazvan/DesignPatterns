<?php

namespace DesignPatterns\Behavioral\Strategy;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "TEXT notification: {$message}\n";
    }
}