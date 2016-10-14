<?php
  $text = "きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
  $replace_text1 = str_replace("U","う",$text);
  $replace_text2 = str_replace("I","い",$replace_text1);
  echo $replace_text2;
