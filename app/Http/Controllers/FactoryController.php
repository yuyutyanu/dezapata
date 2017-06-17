<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 18:21
 */

namespace App\Http\Controllers;
use App\Service\Factory\Factory;

class FactoryController
{
    private $factory;
    public function index(){
        $list = ['\ListFactory\ListFactory','\TableFactory\TableFactory'];
        $index = rand(0,1);

        $this->factory = Factory::getFactory("App\Service\Factory".$list[$index]);
        $this->out();
    }

    public function out(){
        for ($i = 0 ; $i < 3; $i++) {
            $asahi = $this->factory->createLink("朝日新聞", "http://www.asahi.com/");
            $yomiuri = $this->factory->createLink("読売新聞", "http://www.yomiuri.co.jp/");
            $traynews = $this->factory->createTray("新聞");
            $traynews->add($asahi);
            $traynews->add($yomiuri);

            $page = $this->factory->createPage("LinkPage", "ちゃぬ");
            $page->add($traynews);
            $page->output();
        }
    }
}