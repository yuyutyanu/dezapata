<?php

namespace App\Service\Factory;
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 18:00
 */
abstract class Factory
{
    public static function getFactory($className){
        $factory = new $className();
        return $factory;
    }

    public abstract function createLink($caption,$url);
    public abstract function createTray($caption);
    public abstract function createPage($title,$author);
}