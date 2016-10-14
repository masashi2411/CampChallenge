<?php
 session_start();
 $_SESSION['lastdate'] = date(Y年m月d日H時i分s秒);
 echo $_SESSION['lastdate'];
