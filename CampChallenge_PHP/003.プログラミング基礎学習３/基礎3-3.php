<?php
  function hanbetsu($num1,$num2=5,$type=false){
    $num3 = $num1 * $num2;
    if($type===false){
      echo $num3;

  }elseif($type===true){
    $num4 = $num3 * $num3;
    echo $num4;
  }else{
    echo "正しいタイプを入力してください。";
  }
}
 hanbetsu(2,4);
