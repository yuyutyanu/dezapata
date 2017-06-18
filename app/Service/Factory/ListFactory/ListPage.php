<?php

namespace App\Service\Factory\ListFactory;
use App\Service\Factory\Page;


class ListPage extends Page
{
    function __construct($title, $author)
    {
        parent::__construct($title, $author);
    }

    public  function makeHTML()
    {
        $this->buffer[] = "<html><head><title>".$this->title."</title></head>";
        $this->buffer[] = "<body>";
        $this->buffer[] = "<h1>".$this->title."</h1>";
        $this->buffer[] = "<ul>";

        foreach ($this->content as $content_key => $content_val){
            foreach ($content_val->makeHTML() as $key => $val){
                $this->buffer[] = $val;
            }
        }

        $this->buffer[] = "</ul>";
        $this->buffer[] = "<hr><address>".$this->author."</address>";
        $this->buffer[] = "</body></html>";

        return $this->buffer;
    }
}