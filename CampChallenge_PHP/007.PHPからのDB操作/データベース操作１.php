<?php
define('DB_DATABASE', 'Challenge_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'babaanimal');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME,DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //

} catch (PDOException $e) {
  die('接続に失敗しました'.$e->getMessage());
}
