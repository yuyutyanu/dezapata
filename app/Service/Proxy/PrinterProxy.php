<?php

namespace App\Service\Proxy;

/*
 *
 * Printer class　が必要ない場合代理(proxy)として処理するクラス
 *
 * 初期化に時間がかかる機能がたくさん存在するような大きいシステムの場合、
 * 起動の時点では利用しない機能を全て初期化していては時間がかかってしまうため、
 * 実際にその機能を使うときに本人が処理する。それまではproxyが代理で処理を行う。
 */
class PrinterProxy implements Printable
{
    private $printerName;
    private $className;
    private $real;

    function __construct($printerName,$className)
    {
        $this->printerName = $printerName;
        $this->className = $className;
    }

    public function setPrinterName($name)
    {
        if(!empty($this->real)){
            $this->real = $name;
        }
        $this->printerName = $name;
    }


    public function getPrinterName()
    {
        return $this->printerName;
    }
    /*
     * 本人が必要になった時にdoPrintの実装を移譲して本人に処理をさせる。
     * このメソッドを仕様しない場合、proxyだけで事が足りる。
     *
     * フレイムワークなどの遅延読み込みはここの部分に相当する。
     */
    public function doPrint($string)
    {
        $this->realize();
        $this->real->doPrint($string);
    }

    private function realize(){
        if($this->real == null){
            $this->real = new $this->className($this->printerName);
        }
    }
}