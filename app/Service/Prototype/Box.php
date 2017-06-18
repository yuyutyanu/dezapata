<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 17:58
 */

namespace App\Service\Prototype;


class Box implements Product
{
    public $count;
    public function createClone()
    {
        return clone $this;
    }
}