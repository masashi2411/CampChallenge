<?php
 $access_time = date(Y年m月d日H時i分s秒);
 setcookie('LastLoginDate',$access_time);
 $lastdate = $_COOKIE['LastLoginDate'];
 echo $lastdate;
