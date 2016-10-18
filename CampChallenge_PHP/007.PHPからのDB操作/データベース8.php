<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8">
    <title>名前検索</title>
  </head>
  <body>

    <article>
        <form action="index.php" method="post">
            <p>名前部分検索: <input type="text" name="nam"></p>
            <p><input type="submit" value="検索"></p>
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
$stmt = $db->query("select * from users where name like '%$name%'");
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(empty($name)){
 echo null;
}elseif(empty($user)){
  echo "検索対象はいませんでした。";
}else{
echo "<pre>";
print_r($user);
echo "</pre>";
}


} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
