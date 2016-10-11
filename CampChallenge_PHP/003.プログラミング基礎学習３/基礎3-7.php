<?php
 $num = 3;
  function staticVar(){
    static $Var = 0;
    $Var++;
    global $num;
    $num = $num * 2;
    echo $Var . "回目の処理は、";
    echo "$num<br/>";
  }
  for($i=1;$i<=20;$i++){
     staticVar();
   }
