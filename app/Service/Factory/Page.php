<?php
namespace App\Service\Factory;
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 17:59
 */
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