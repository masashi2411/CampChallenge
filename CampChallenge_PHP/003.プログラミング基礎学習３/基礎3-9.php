<?php
  function shokai($shokai){
    $shokai = [
      "馬場雅士" => array(
        "id" => "01",
        "名前" => "馬場雅士",
        "生年月日" => "1990年4月11日",
        "住所" => "東京都"
      ),
      "山田太郎" => array(
        "id" => "02",
        "名前" => "山田太郎",
        "生年月日" => "1988年5月1日",
        "住所" => "北海道"
      ),
      "田中花子" => array(
        "id" => "03",
        "名前" => "田中花子",
        "生年月日" => "1992年12月20日",
        "住所" => "沖縄県"
      )
   ];
    return $shokai;
  }
 foreach(shokai() as $key1 => $value1){
   for($i = 1;$i < 2;$i++){
   foreach($value1 as $key2 => $value2){
     if(($key2 == "id") || ($key2 == "住所")){
       continue;
     }
     echo "$value2<br/>";
   }
  }
 }
