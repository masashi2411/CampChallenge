<?php require_once 'defineUtil.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>

    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">

    名前:
    <input type="text" name="name" value="<?php echo $_POST['name']//再入力の際の初期値?>">
    <br><br>

    生年月日:　
    <select name="year">
        <option value="----">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:

    <br>
    <input type="radio" name="type" value="エンジニア"　<?php if(isset($_SESSION['type']) && $_SESSION['type'] == "エンジニア"){ print "checked"; } //再入力の際の初期値?>>エンジニア<br>
    <input type="radio" name="type" value="営業" <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "営業"){ print "checked"; } ?>>営業<br>
    <input type="radio" name="type" value="その他" <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "その他"){ print "checked"; } ?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $_POST['tell']//再入力の際の初期値?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard" ><?php echo $_POST['comment']//再入力の際の初期値?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
  </form>
  <form action="<?php echo return_top();//課題１トップページリンクする組み込み関数 ?>" method="POST">
      <input type="submit"  value="トップ画面に戻る">
  </form>
</body>
</html>
