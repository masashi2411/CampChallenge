<?php
  function shokai($shokai){
    $shokai = [
      "idは" => "2008<br/>",
      "名前は" => "馬場雅士<br/>",
      "生年月日は" => "1990年4月11日<br/>",
      "住所は" => "東京都",
  ];
    return $shokai;
  }
  $a = shokai();
 foreach($a as $key => $value){
   echo "$key" . "$value";
 }
