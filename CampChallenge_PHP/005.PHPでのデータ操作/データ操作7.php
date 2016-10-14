<?php
 $name = $_POST['textname'];
 $sex = $_POST['textsex'];
 $hobby = $_POST['texthobby'];
 setcookie('lastname',$name);
 setcookie('lastsex',$sex);
 setcookie('lasthobby',$hobby);
 echo $_COOKIE['lastname'] . "<br/>". $_COOKIE['lastsex'] . "<br/>" . $_COOKIE['lasthobby'];


?>
 <html>
 <head>
 <head/>
 <body>
   <form action="index.php" method="post">
     名前:<input type="text" name="textname">
     性別:<input type="text" name="textsex">
     趣味:<input type="text" name="texthobby"><br/>
     <input type="submit" value="送信">
   <form/>
 <body/>
 <html/>
