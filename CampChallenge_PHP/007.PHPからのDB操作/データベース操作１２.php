<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf8">
    <title>ユーザー検索</title>
  </head>
  <body>

    <article>
        <form action="index.php" method="post">
            <p>名前: <input type="text" name="name"></p>
            <p>年齢: <input type="number" name="age"></p>
            <p>誕生日: <input type="date" name="birth" placeholder="2000-01-01"></p>
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

$name = $_POST["name"];
$age = $_POST["age"];
$birth = $_POST["birth"];


if(!empty($name) && !empty($age) && !empty($birth)){
  $stmt = $db->query("select * from users where name like '%$name%' and age = '$age' and birthday = '$birth' ");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(!empty($name) && !empty($age) && empty($birth)){
  $stmt = $db->query("select * from users where name like '%$name%' and age = '$age'");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(!empty($name) && empty($age) && empty($birth)){
  $stmt = $db->query("select * from users where name like '%$name%'");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(empty($name) && !empty($age) && !empty($birth)){
  $stmt = $db->query("select * from users where age = '$age' and birthday = '$birth' ");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(empty($name) && !empty($age) && empty($birth)){
  $stmt = $db->query("select * from users where age = '$age'");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(empty($name) && empty($age) && !empty($birth)){
  $stmt = $db->query("select * from users where birthday = '$birth'");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}
if(!empty($name) && empty($age) && !empty($birth)){
  $stmt = $db->query("select * from users where name like '%$name%' and birthday = '$birth' ");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($users);
  echo "</pre>";
}

} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
