<?php

namespace App\Service\Factory;
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 17:59
 */
abstract class Item
{
    protected $caption;

    function __construct($caption)
    {
        $this->caption = $caption;
    }

    public abstract function makeHTML();
}