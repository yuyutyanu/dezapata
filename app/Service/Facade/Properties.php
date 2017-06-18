<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 12:40
 */

namespace App\Service\Facade;


class Properties
{
    private $mails = ["taro" => "aaa@aaa.aa","jiro" => "bbb@bbb.bb"];

    public function getProperties(){
        return $this->mails;
    }
}