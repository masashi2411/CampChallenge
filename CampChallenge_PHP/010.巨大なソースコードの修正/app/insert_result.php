<?php require_once 'scriptUtil.php'; ?>
<?php require_once 'dbaccesUtil.php'; ?>
<?php if($_POST['ok'] !== 'ok'){
   echo "アクセス不可です。";//課題５hiddenされたフォーム直リンク禁止として使用
   exit();
} ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>
    <?php
    session_start();
    $name = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];
    echo insert_result();//課題７データベースアクセスのコードを別ファイルで保存して関数呼び出し

    try{
    $pdo = connect2MySQL();
    insert($pdo,$name,$birthday,$type,$tell,$comment);
    $pdo = null;//接続オブジェクトを初期化することでDB接続を切断
}catch(PDOException $e){
 $pdo = null;
 echo'次記のエラーにより処理を中断します:'.$e->getMessage();
 $_SESSION = array();//課題４　セッション情報が残っているとinsert.phpに移動した時表示されてしまうので消去
 echo return_top();
 exit;
}
?>
    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php echo return_top(); ?>

</body>

</html>
