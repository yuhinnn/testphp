<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>タイトル</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <header>
<h1> Hello,world  </h1>
  </header>
<div class="main">
  <div class="title">
    <h1>入力</h1>
  </div>
  <h3>名前</h3>
  <?php
  if (mb_strlen($_POST) > 4) {
  echo "文字数が4文字を超えています" ;
  }
   echo $_POST["name"];
   echo "さん";
   ?>

</div>


</body>

</html>
