<?php
session_start();

if (isset($_SESSION["USERNAME"])) {
  $errorMessage = "ログアウトしました。";
}
else {
  $errorMessage = "セッションがタイムアウトしました。";
}

$_SESSION = array();
@session_destroy();
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
  </head>
  <body>
  <h1>ログイン機能</h1>
  <div><?php echo $errorMessage; ?></div>
  <ul>
  <li><a href="login.php">ログイン画面に戻る</a></li>
  </ul>
  </body>
</html>
