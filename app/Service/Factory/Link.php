<?php
namespace App\Service\Factory;
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 17:59
 */
abstract class Link extends Item
{
    protected $url;

    function __construct($caption,$url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}