<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 13:26
 */

namespace App\Http\Controllers;
use App\Service\Singleton\Singleton;

class SingletonController
{
    public function index(){
         $instance1 = Singleton::getInstance();
         $instance2 = Singleton::getInstance();

         if($instance1 === $instance2){
             echo "true";
         }else{
             echo "false";
         }
    }
}