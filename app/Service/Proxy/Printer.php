<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 15:16
 */

namespace App\Service\Proxy;

class Printer implements Printable
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
        echo $this->name."のインスタンスを生成中";
        $this->heavyJob();
    }

    /**
     * @param mixed $name
     */
    public function setPrinterName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrinterName()
    {
        return $this->name;
    }

    public function doPrint($string)
    {
        echo "<br>";
        echo "プリンターの名前 ： ".$this->name;
        echo "<br>";
        echo "印刷内容 : ".$string;
    }

    //必要になったときに遅延読み込みさせたい処理
    private function heavyJob(){
        for ($i = 0 ; $i < 5 ; $i++)
        {
            sleep(1);
            echo ".";
        }
        echo "完了";
    }
}