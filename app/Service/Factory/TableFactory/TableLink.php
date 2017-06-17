<?php

/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 19:47
 */
namespace App\Service\Factory\TableFactory;
use App\Service\Factory\Link;

class TableLink extends Link
{
    public  function makeHTML()
    {
        return "<tr style='background: gray'><td><a style='color:white' href='".$this->url."'>".$this->caption."</a></td></tr>";
    }
}