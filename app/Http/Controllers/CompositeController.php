<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 15:02
 */

namespace App\Http\Controllers;


use App\Service\Composite\Directory;
use App\Service\Composite\File;

class CompositeController
{
    public function index(){
        echo "Making root entries";
        $rootdir = new Directory("root");
        $bindir = new Directory("bin");
        $tmpdir = new Directory("tmp");
        $usrdir = new Directory("usr");

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);
        $bindir->add(new File("vi",1000));
        $bindir->add(new File("latex",20000));

        $rootdir->printList();

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Making root entries";
        $yuki = new Directory("yuki");
        $hanako = new Directory("hanako");
        $tomura = new Directory("tomura");
        $usrdir->add($yuki);
        $usrdir->add($hanako);
        $usrdir->add($tomura);
        $yuki->add(new File("diary.html",100));
        $hanako->add(new File("Composite.php",200));
        $tomura->add(new File("game.doc",300));
        $rootdir->printList();

    }
}