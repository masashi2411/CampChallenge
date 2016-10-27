<?php require_once 'defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php//課題２誕生日条件を除いた条件に書き換え
    if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment'])){


        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];
        //課題４再入力の際のセッション情報
        $post_year = $_POST['year'];
        $post_month = $_POST['month'];
        $post_day = $_POST['day'];

        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;
    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="hidden" name="ok" value="ok">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
          <input type="hidden" name="name" value="<?php echo $_POST['name']//課題５hiddenされたフォーム?>">
            <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
            <input type="hidden" name="tell" value="<?php echo $_POST['tell']?>">
            <input type="hidden" name="comment" value="<?php echo $_POST['comment']?>">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        <?php //課題３未入力項目を表示
        if(empty($_POST['name'])){
         echo '名前が未入力です'.'<br>';
         //課題４　セッションに入力情報を保存
       }else{$name=$_POST['name'];
         $_SESSION['name']=$name;
       }
     if(empty($_POST['tell'])){
       echo '電話番号が未入力です'.'<br>';
     }else{$tell=$_POST['tell'];
       $_SESSION['tell']=$tell;
     }
     if(empty($_POST['comment'])){
       echo '自己紹介が未入力です'.'<br>';
     }else {$comment=$_POST['comment'];
       $_SESSION['comment']=$comment;
     } ?>
        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
          　<input type="hidden" name="name" value="<?php echo $_POST['name']//初期値代入のためhidden値を渡す?>">
            <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
            <input type="hidden" name="tell" value="<?php echo $_POST['tell']?>">
            <input type="hidden" name="comment" value="<?php echo $_POST['comment']?>">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <br>
    <?php echo return_top();//課題１トップページリンクする組み込み関数 ?>
</body>
</html>
