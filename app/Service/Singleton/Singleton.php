<?php

/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 13:14
 */
namespace App\Service\Singleton;
use App\Service\Singleton\Singleton as onlyInstance;

class Singleton
{
    static $singleton = null;
    private function __construct()
    {

    }

    static function getInstance(){
        if(self::$singleton === null){
           self::$singleton = new static();
        }
        return self::$singleton;
    }
}