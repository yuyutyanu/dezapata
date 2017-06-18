<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 14:39
 */

namespace App\Service\Composite;


class Directory extends Entry
{
    private $name;
    private $directory = [];

    function __construct($name)
    {
        $this->name = $name;
    }

    public  function getName()
    {
        return $this->name;
    }
    public  function getSize()
    {
        $size = 0;
        foreach ($this->directory as $key => $entry){
            $size += $entry->getSize();
        }
        return $size;
    }
    public function add(Entry $entry){
        $this->directory[] = $entry;
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
        foreach ($this->directory as $key => $entry){
            $entry->printList($prefix."/".$this->name);
        }

    }
}