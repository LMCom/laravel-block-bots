<?php

namespace LMCom\LaravelBlockBots\Contracts;

class Configuration
{
    public function __construct()
    {
        foreach (config('block-bots') as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
