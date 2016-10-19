<?php
session_start();

if (!isset($_SESSION["USERNAME"])) {
  header("Location: logout.php");
  exit;
}

define('DB_DATABASE', 'Challenge_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'babaanimal');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  $db = new PDO(PDO_DSN, DB_USERNAME,DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$iname = $_POST["itemname"];
$number = $_POST["number"];

if(isset($iname) && isset($number)){
  $stmt = $db->query("update item set number = '$number' where name = '$iname'");
 echo "商品個数の変更が完了しました。<br/>";
 }
 }catch (PDOException $e) {
   die('接続に失敗しました'.$e->getMessage());
}


?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>変更画面</title>
  </head>
  <body>
  <h1>商品登録画面</h1>
  <p>ようこそ<?=htmlspecialchars($_SESSION["USERNAME"], ENT_QUOTES); ?>さん</p>
  <form action="main.php" method="post">
      <p>商品名: <input type="text" name="itemname"></p>
      <p>個数: <input type="text" name="number"></p>
      <p><input type="submit" value="変更"></p>
  </form>
  <ul>
  <li><a href="logout.php">ログアウト</a></li>
  </ul>
  </body>
</html>
