<?php
namespace App\Service\Factory;

abstract class Page
{
    protected $title;
    protected $author;
    protected $content = [];
    protected $buffer = [];

    function __construct($title,$author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    function add(Item $item){
        $this->content[] = $item;
    }

    function output(){
        $this->buffer = $this->makeHTML();

        foreach ($this->buffer as $key => $val){
            echo $val;
        }
    }

    public abstract function makeHTML();
}