<?php
namespace App\Service\Factory;

abstract class Tray extends Item
{
    protected $tray = [];

    function __construct($caption)
    {
        parent::__construct($caption);
    }

    public  function add(Item $item)
    {
        $this->tray[] = $item;
    }
}