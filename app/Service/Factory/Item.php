<?php

namespace App\Service\Factory;

abstract class Item
{
    protected $caption;

    function __construct($caption)
    {
        $this->caption = $caption;
    }

    public abstract function makeHTML();
}