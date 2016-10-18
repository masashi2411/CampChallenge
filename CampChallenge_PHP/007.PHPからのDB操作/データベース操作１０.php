<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8">
    <title>ユーザー削除</title>
  </head>
  <body>

    <article>
        <form action="index.php" method="post">
            <p>削除したいユーザーのID: <input type="text" name="id"></p>
            <p><input type="submit" value="削除"></p>
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
if(isset($id)){
  $stmt = $db->query("delete from users where profileID = '$id'");
 echo "ユーザー削除が完了しました。";
 //$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $db = null;
}


} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
