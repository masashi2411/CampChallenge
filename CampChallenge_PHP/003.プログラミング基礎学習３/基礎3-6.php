<?php
  function shokai($a){
    $shokai1 = "馬場雅士<br/>" . "1990年4月11日生まれ<br/>" . "東京都住み";
    $shokai2 = "山田太郎<br/>" . "1988年5月1日生まれ<br/>" . "北海道住み";
    $shokai3 = "田中花子<br/>" . "1992年12月22日生まれ<br/>" . "沖縄住み";
    if(strstr("馬場雅士",$a)){
      echo $shokai1;
   }elseif(strstr("山田太郎",$a)){
      echo $shokai2;
   }elseif(strstr("田中花子",$a)){
      echo $shokai3;
   }else{
     echo "検索結果は不明です。";
   }
   return $a;
}
  shokai("田");
