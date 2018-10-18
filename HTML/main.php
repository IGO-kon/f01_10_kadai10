<?php

$result = false;


//         'グー',
//         'チョキ',
//         'パー'
//     );


$player = "";


if(isset($_POST["mode"])){
    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');
}

//

//$i = rand(1,3);
//echo $i;
$y = rand(1,3);
//echo $y;
$j = ($player - $y);

$k = ($j + 3);

$l = ($k % 3);

if ($l == 1){
    
    $result = 'lose';

}elseif ($l == 2) {
    $result = 'win';
}else{
    $result = 'draw';
}


?>

<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPでじゃんけん!</title>
</head>
<body>
<p>選んでください。</p>

<form action="main.php" method="post">
    <button type="submit" name="choice" value="1">グー</button>
    <button type="submit" name="choice" value="2">チョキ</button>
    <button type="submit" name="choice" value="3">パー</button>
    <input  type="hidden" name="mode"   value="1">
</form>
<!-- Code of PHP -->

    <p>結果</p>
    <?php if ($player) : ?>

<?php
if ($player == 1){
    $player ='ぐー';
}elseif($player == 2){
    $player ='ちょき';
}else{
    $player ='( ᐛ👐)ﾊﾟｧ';
}

if ($y == 1){
    $y ='ぐー';
}elseif ($y == 2){
   $y = 'ちょき';
}else{
    $y ='( ᐛ👐)ﾊﾟｧ';
}

?>


    <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $y; ?>
    </p>

    <p>
    <?php echo $result; ?>です。
    </p>


<?php
// if ($player =='ぐー'){
//     $player = 1;
// }elseif($player =='ちょき'){
//     $player = 2;
// }else{
//     $player = 3;
// }

// if ($y =='ぐー'){
//     $y = 1;
// }elseif ($y =='ちょき'){
//    $y = 2;
// }else{
//     $y =3;
// }

 ?>
<div class="save">このたたかいを　きろくしますか？</div>
<form action="insert.php" method="post">

    <input type="hidden"  name="choice" value="<?=$player?>">
    <input type="hidden" name="enemy" value="<?=$y?>">
    <input type="hidden" name="result" value="<?=$result?>">
    <input type="submit" value="はい">
 </form>


     <?php endif; ?>
<!-- <form action="insert.php" method="post">

<button type="submit" name="choice" value="">登録</button>

</form> -->
<!-- <form action="insert.php" method="post">
<button type="submit" name="choice" value="1">登録</button> -->


<!-- </form> -->
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
alert('おかえりなさい');
//管理者ページ遷都
location.href = "http://localhost/10_10_kondodaigo/HTML/sub.php";


//
    //キー入力を初期化
    inputKey = [];
 }
});

</script>

</body>
</html>