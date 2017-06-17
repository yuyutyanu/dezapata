<?php
namespace App\Service\Factory;
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 17:59
 */
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