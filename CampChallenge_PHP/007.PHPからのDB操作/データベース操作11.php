<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8">
    <title>ユーザー変更</title>
  </head>
  <body>

    <article>
        <form action="index.php" method="post">
            <p>変更したいユーザーのID: <input type="text" name="id"></p>
            <p>名前: <input type="text" name="name"></p>
            <p>年齢: <input type="text" name="age"></p>
            <p><input type="submit" value="変更"></p>
        </form>
    </article>

  </body>
</html>

<?php
define('DB_DATABASE', 'Challenge_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'babaanimal');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);


try {
  $db = new PDO(PDO_DSN, DB_USERNAME,DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];

if(isset($id) && isset($name)){
  $stmt = $db->query("update users set name = '$name' where profileID = '$id'");
 echo "名前の変更が完了しました。<br/>";
}
if(isset($id) && isset($age)){
  $stmt = $db->query("update users  set age = '$age' where profileID = '$id'");
 echo "年齢の変更が完了しました。";
 }

} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
