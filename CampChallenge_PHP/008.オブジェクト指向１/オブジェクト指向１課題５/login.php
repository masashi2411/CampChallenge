<?php

session_start();

$db['host'] = "mysql:dbname=Challenge_db;host=localhost";
$db['user'] = "root";
$db['pass'] = "babaanimal";
$db['dbname'] = "Challenge_db";


$errorMessage = "";


if (isset($_POST["login"])) {
  if (empty($_POST["name"])) {
    $errorMessage = "ユーザIDが未入力です。";
  } else if (empty($_POST["password"])) {
    $errorMessage = "パスワードが未入力です。";
  }


  if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $mysqli = new mysqli('localhost', 'root','babaanimal','Challenge_db');
    if ($mysqli->connect_errno) {
      print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
      exit();
    }


    $mysqli->select_db($db['dbname']);

    $name = $mysqli->real_escape_string($_POST["name"]);


    $query = "SELECT * FROM userss WHERE name = '" . $name . "'";
    $result = $mysqli->query($query);
    if (!$result) {
      print('クエリーが失敗しました。' . $mysqli->error);
      $mysqli->close();
      exit();
    }

    if($row = $result->fetch_assoc()) {
      echo $row["name"];
      echo $row["password"];
      $db_pwd = $row['password'];
    }

    $mysqli->close();

echo $_POST["password"];
echo $db_pwd;


    if ($db_pwd == $_POST["password"]){
      $_SESSION["USERNAME"] = $_POST["name"];
      header("Location: main.php");
      exit;
    }
    else {
      $errorMessage = "ユーザ名あるいはパスワードに誤りがあります。";
      var_dump($name);
      var_dump($_POST["password"]);

    }
  } else {
  }
}

?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>ログイン画面</title>
  </head>
  <body>
    <h1>ログイン機能</h1>
    <?php print($_SERVER['PHP_SELF']) ?>
    <form id="loginForm" name="loginForm" action="" method="POST">
    <fieldset>
  <legend>ログインフォーム</legend>
  <div><?php echo $errorMessage ?></div>
  <label for="name">ユーザ名</label><input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST["name"], ENT_QUOTES); ?>">
  <br>
  <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
  <br>
  <input type="submit" id="login" name="login" value="ログイン">
  </fieldset>
  </form>
  </body>
</html>
