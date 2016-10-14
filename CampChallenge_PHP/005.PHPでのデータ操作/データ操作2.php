<?php
 $name = $_POST['textname'];
 $sex = $_POST['textsex'];
 $hobby = $_POST['texthobby'];
 echo $name . "<br/>" . $sex . "<br/>" . $hobby;



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
