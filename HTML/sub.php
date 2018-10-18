<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_f01_db10;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('dbError:'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_jk_table");
$status = $stmt->execute();




//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= "<p>".$result["choice"]."VS".$result["enemy"]."　けっか！　".$result["result"]."</p>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>たたかいのきろく</title>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a>たたかいのきろく</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->
<script>



//konami_komand




 var inputKey = [];

//入力されたキーと比較する隠しコマンド
//38 = 上
//40 = 下
//37 = 左
//39 = 右
//66 = B
//65 = A
var konamiCommand = [38,38,40,40,37,39,37,39,66,65];

//画面上のキー入力イベントリスナ
document.addEventListener('keyup', function(e) {
 //キー入力を配列に追加
 inputKey.push(e.keyCode);

 //キー入力が保存された配列と隠しコマンドを比較
 if (inputKey.toString().indexOf(konamiCommand) >= 0) {

    //隠しコマンド成功時あらーと
alert('たたかいはおわらない');
//管理者ページ遷都
location.href = "http://localhost/10_10_kondodaigo/HTML/main.php";


//
    //キー入力を初期化
    inputKey = [];
 }
});

</script>

</body>
</html>