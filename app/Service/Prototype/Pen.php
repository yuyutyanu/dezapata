<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 17:58
 */

namespace App\Service\Prototype;


class Pen implements Product
{
    public $count;
    public function createClone()
    {
        return clone $this;
    }
}