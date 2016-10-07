<?php

$int = $_GET["int"];
 echo $int . "  ";
if($int <= 0 || is_float($int)){
    echo "正の整数を入力してください。";
} else {
    for($i = 2; true; ){
        if(($int % $i) === 0){
            echo $i."×";
            $int = $int / $i;
        } else {
            $i = $i + 1;
        }
        if($int <= $i){
            if($int === 1){ echo "1";}
            elseif($int == $i and $int > 10){
               echo "その他";}
            elseif($int == $i){
               echo $i;
            }
            break;
        }
    }
}
?>
