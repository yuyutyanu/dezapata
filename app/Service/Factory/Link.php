<?php
namespace App\Service\Factory;

abstract class Link extends Item
{
    protected $url;

    function __construct($caption,$url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}