<?php
  function shokai($bool){
    echo "馬場雅士<br/>";
    echo "1990年4月11日<br/>";
    echo "出身は鹿児島で、甘いものが好きです。<br/>";
    $bool=true;
    return $bool;
  }
  for($i = 1; $i <= 10; ++$i){
    shokai();
  }
   if($bool=true){
     echo "この処理は正しく実行されました。";
   }else{
     echo "正しく実行されませんでした。";
   }
