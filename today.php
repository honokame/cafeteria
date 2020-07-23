<?php

// 年月日取得
$date = getdate();
// echo $date["year"];
// echo $date["mon"];
// echo $date["mday"];

$today = '2020-07-27';
echo "今日は".$today."\n";

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "1qazxsw23edc";

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
$sql = "SELECT * FROM menu";
$res = pg_query($dbconn,$sql) or die("データ読み込みエラー");

// A,Bセット情報読み込み 
for($i = 0;$i < pg_numrows($res);$i++){
  $row = pg_fetch_array($res,$i,PGSQL_ASSOC);

  // Aセット
  if($row["date"] == $today && $row["type"] == 0){
    $dayA["menu"] = $row["menu"];
    $dayA["price"] = $row["price"];
    $dayA["cal"] = $row["cal"];
    $dayA["sold"] = $row["sold"];
  }

  // Bセット
  else if ($row["date"] == $today && $row["type"] == 1) {
    $dayB["menu"] = $row["menu"];
    $dayB["price"] = $row["price"];
    $dayB["cal"] = $row["cal"];
    $dayB["sold"] = $row["sold"];
  }
}

// 常設メニュー読み込み
$rowN = pg_fetch_all($res);
$dayN = array();
foreach ($rowN as $normal) {
  if ($normal["type"] == 2) {
    array_push($dayN, $normal);
  }
}

echo $dayN[0]["sold"];
echo $dayN[0]["cal"];
echo $dayN[1]["menu"];

// 表示確認用
//echo $dayA["menu"].$dayA["price"].$dayA["cal"];
//echo $dayB["menu"].$dayB["price"].$dayB["cal"];
// echo $normal;

// 接続を解除
pg_close($dbconn);

?>