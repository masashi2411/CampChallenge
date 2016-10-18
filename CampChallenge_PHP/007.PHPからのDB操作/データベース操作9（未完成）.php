<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8">
    <title>ユーザー登録</title>
  </head>
  <body>

    <article>
        <form action="index.php" method="post">
            <p>名前: <input type="text" name="nam"></p>
            <p>年: <input type="text" name="age"></p>
            <p><input type="submit" value="登録"></p>
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

$name = $_POST["nam"];
$age = $_POST["age"];
if(isset($name) || isset($age)){
  $stmt = $db->query("insert into users (name,age) values('$name','$age')");
 echo "登録が完了しました。";
 $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
 $db = null;
}


} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
