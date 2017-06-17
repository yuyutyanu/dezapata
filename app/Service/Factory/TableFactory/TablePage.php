<?php

/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 19:47
 */
namespace App\Service\Factory\TableFactory;
use App\Service\Factory\Page;
class TablePage extends Page
{
    public function makeHTML()
    {
        $this->buffer[] = "<html><head><title>".$this->title."</title></head>";
        $this->buffer[] = "<body>";
        $this->buffer[] = "<h1>".$this->title."</h1>";

        foreach ($this->content as $content_key => $content_val){
            foreach ($content_val->makeHTML() as $key => $val){
                $this->buffer[] = $val;
            }
        }

        $this->buffer[] = "<hr><address>".$this->author."</address>";
        $this->buffer[] = "</body></html>";

        return $this->buffer;


    }
}