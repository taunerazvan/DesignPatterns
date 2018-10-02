<?php

namespace DesignPatterns\Structural\AbstractFactory;

interface Parser
{
    public function parse(string $input): array;
}
