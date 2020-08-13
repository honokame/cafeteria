<?php
$display_enc = "UTF-8";

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "oshkmr1435";

// データベースに接続
$dbconn = pg_connect("host = $sv dbname = $name user = $user password = $pass") or die("接続エラー");

// いたずら対策
function h($s){
  return htmlspecialchars($s,ENT_QUOTES,"utf-8");
}

// レビューが送信されたとき
if (isset($_POST['send'])) {
  //$today = date('Y-m-d');
  $time = date('Y-m-d H:i:s');
  $menu = $_POST['menu'];
  $star = $_POST['star'];

  // コメントのみのとき
  if ($star == null) {
    $star = 0;
  }

  $comment = h($_POST["comment"]);
  $sql = "INSERT INTO review1 VALUES('$menu',$star,'$comment','$time')";
  $res = pg_query($dbconn, $sql) or die("データ読み込みエラー");
}
?>


























