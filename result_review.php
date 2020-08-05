<?php
$display_enc = "UTF-8";

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "1qazxsw23edc";

// データベースに接続
$dbconn = pg_connect("host = $sv dbname = $name user = $user password = $pass") or die("接続エラー");

// レビューが送信されたとき
if (isset($_POST['send'])) {
  $today = date('Y-m-d');
  $menu = $_POST['menu'];
  $star = $_POST['star'];

  // コメントのみのとき
  if ($star == null) {
    $star = 0;
  }

  $comment = $_POST["comment"];
  $sql = "insert into review values('$menu',$star,'$comment','$today')";
  $res = pg_query($dbconn, $sql) or die("データ読み込みエラー");
}
  
?>


























