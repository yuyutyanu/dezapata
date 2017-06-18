<?php

namespace App\Service\Factory;

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