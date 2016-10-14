<?php
 	if ( isset($_FILES["upfile"]) && is_uploaded_file($_FILES["upfile"]["tmp_name"]) ) {
 		$source = file_get_contents($_FILES["upfile"]["tmp_name"]);

 		echo "<pre>";
 		print_r($source);
 		echo "</pre>";
 	}
 ?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  ファイル：<br />
  <input type="file" name="upfile" size="30" /><br />
  <br />
  <input type="submit" value="アップロード" />
</form>
</body>
</html>
