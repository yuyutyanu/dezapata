<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 18:02
 */

namespace App\Http\Controllers;

use App\Service\Prototype\Box;
use App\Service\Prototype\Manager;
use App\Service\Prototype\Pen;

class PrototypeController
{
    public function index(){
        $manager = new Manager();
        $pen = new Pen();
        $box = new Box();

        $manager->register("pen",$pen);
        $manager->register("box",$box);

        $pen2 = $manager->create("pen");
        $pen2->count = 1;
        $box2 = $manager->create("box");
        $box2->count = 1;

        if($pen === $pen2 && $box === $box2){
            echo "true";
        }else{
            dd($pen,$pen2,$box,$box2);
        }
    }
}