<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 12:41
 */

namespace App\Service\Facade;


class HTMLWriter
{
    public function createLink($url,$caption){
        return "<a href='".$url."'>".$caption."</a>";
    }
    public function createH1($string){
        return "<h1>".$string."</h1>";
    }
    public function createTitle($string){
        return "<title>".$string."</title>";
    }
    public function createContact($properties){
        $buffer = [];
        $buffer[] = "<hr>";

        foreach ($properties as $key => $property){
            $buffer[] = "<p>".$property."</p>";
        }

        return $buffer;
    }
}