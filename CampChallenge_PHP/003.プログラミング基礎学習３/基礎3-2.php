<?php
  function hanbetsu($num){
    if($num % 2 === 0){
      echo "$num" . "は偶数です。";
  }else{
    echo "$num" . "は奇数です。";
  }
}

   hanbetsu(6);
