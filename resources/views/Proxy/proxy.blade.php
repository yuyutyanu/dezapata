
{{"proxyが取得したプリンターの名前 : ".$proxy->getPrinterName()}}
{!!"<br>"!!}
{{"--------↑proxyが処理---------"}}
{!!"<br>"!!}{!!"<br>"!!}{!!"<br>"!!}{!!"<br>"!!}{!!"<br>"!!}
{{"--------↓本人が処理---------"}}
{!!"<br>"!!}
{{$proxy->doPrint("プロキシから移譲されて印刷をしております")}}
