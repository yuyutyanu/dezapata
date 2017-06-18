<?php

/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 12:39
 */
namespace App\Service\Facade;

class PageMaker
{
    public static function pageMake(){
       $HTMLWriter =  new HTMLWriter();
       $properties = new Properties();

        echo $HTMLWriter->createTitle("title");
        echo $HTMLWriter->createH1("H1Dayo");
        echo $HTMLWriter->createLink("http://www.yahoo.co.jp","yahoo");
        foreach ($HTMLWriter->createContact($properties->getProperties()) as $key => $val){
            echo $val;
        }
    }
}