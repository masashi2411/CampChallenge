<?php
  $string = A;
  $message = "";
  switch($string){
    case "A" :
     $message ="英語";
     break;
    case "あ" :
     $message = "日本語";
     break;
    default :
     $message = null;
    break;
  }
  echo $message;
