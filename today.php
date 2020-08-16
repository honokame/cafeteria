<?php

// 年月日取得
// $date = getdate();
// echo $date["year"];
// echo $date["mon"];
// echo $date["mday"];

$today = date('Y-m-d');
//$today = '2020-08-21';
//echo "今日は".$today."\n";

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "oshkmr1435";

// 表示文字コード
$display_enc = "UTF-8";

// 関数ーデータの文字コードを変換
function conv_dbdata($string,$enc){
  $det_enc = mb_detect_encoding($string); // エンコーディングを返す
  
  // 何しとるか分からん、変換したいコードに変換してるっぽい
  if($det_enc and $det_enc != $enc){
    return mb_convert_encoding($string,$enc,$det_enc);
  }   
  else{
    return $string;
  }
}

// データベースに接続
$dbconn = pg_connect("host = $sv dbname = $name user = $user password = $pass") or die("接続エラー");

// データを取り出す
$sql = "SELECT * FROM menu ORDER BY type ASC";
$res = pg_query($dbconn,$sql) or die("データ読み込みエラー");

// A,Bセット読み込み 
for($i = 0;$i < pg_numrows($res);$i++){
  $row = pg_fetch_array($res,$i,PGSQL_ASSOC);

  // Aセット
  if($row["date"] == $today && $row["type"] == 0){
    $dayA["menu"] = $row["menu"];
    $dayA["price"] = $row["price"];
    $dayA["cal"] = $row["cal"];
    $dayA["sold"] = $row["sold"];
    $dayA["image"] = $row["image"];
  }

  // Bセット
  // else if($row["date"] == $today && $row["type"] == 1){ 
  if($row["date"] == $today && $row["type"] == 1){
    $dayB["menu"] = $row["menu"];
    $dayB["price"] = $row["price"];
    $dayB["cal"] = $row["cal"];
    $dayB["sold"] = $row["sold"];
    $dayB["image"] = $row["image"];
  }
}

// 常設メニュー読み込み
$row = pg_fetch_all($res); 
$dayN = array(); // 常設メニューの配列

foreach ($row as $norma1) {
  if ($norma1["type"] >= 3) {
    if (strtotime($today) > strtotime($norma1["date"])) {
      $menu = $norma1["menu"];
      $sql2 = "UPDATE menu SET date='$today' where menu='$menu'";
      $res2 = pg_query($dbconn, $sql2) or die("erroe2");
      $sql3 = "UPDATE menu SET sold=false where menu='$menu'";
      $res3 = pg_query($dbconn, $sql3) or die("erroe3");
      $sql4 = "UPDATE menu SET image='hanbaityu.png' where menu='$menu'";
      $res4 = pg_query($dbconn, $sql4) or die("erroe4");
    }
  }
}

foreach ($row as $normal) { // normalにrowNを順番に入れる  
  // 常設のみdayN配列に格納
  if ($normal["type"] >= 3) {
    array_push($dayN, $normal);
  }
}


// 週間メニュー読み込み
$sql5 = "SELECT * FROM menu ORDER BY date";
$res5 = pg_query($dbconn,$sql5) or die("データ読み込みエラー");
$row5 = pg_fetch_all($res5);

$weekA = array();
$weekB = array();

foreach ($row5 as $week) {

  // 当日以降のメニューのみ
  if (strtotime($today) < strtotime($week["date"])) {
    if ($week["type"] == 0) {
      array_push($weekA, $week);
    }
    // else if($week["type"] == 1){
    if ($week["type"] == 1) {
      array_push($weekB, $week);
    }
  }
}

// 表示確認用
//echo $dayA["menu"];
//echo $dayB["menu"].$dayB["price"].$dayB["cal"];
//echo $dayN[0]["menu"].$dayN[0]["price"];
//echo $dayN[1]["menu"].$dayN[1]["price"];
//for($j = 0;$j < 10;$j++){
//  echo $dayN[$j]["menu"];
//}
// 接続を解除
//pg_close($dbconn);
