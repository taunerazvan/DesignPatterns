<?php

namespace DesignPatterns\Behavioral\Strategy;

class MailNotifier extends Notifier
{
    public function inform($message)
    {
        print "MAIL notification: {$message}\n";
    }
}