<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 14:39
 */

namespace App\Service\Composite;


class File extends Entry
{
    private $name;
    private $size;

    function __construct($name,$size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public  function getSize()
    {
        return $this->size;
    }
    public  function getName()
    {
        return $this->name;
    }

    public function printList()
    {
        if(empty(func_get_args())){
            $prefix = "";
        }else{
            $prefix = func_get_args()[0];
        }
        echo "<br>";
        echo $prefix."/".$this;
    }
}