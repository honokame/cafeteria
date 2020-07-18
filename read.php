<html>
<head>
<title>メニューデータから読み込む</title>
<body>
<?php

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
$sql = "SELECT menu,price,cal,allEval,sold FROM menu";
$res = pg_query($dbconn,$sql) or die("データ読み込みエラー");

// 取り出したデータを表示
for($i = 0;$i < pg_numrows($res);$i++){
  $row = pg_fetch_array($res,$i,PGSQL_ASSOC);
  echo "<tb>".$row["menu"]."</tb>";
  echo "<tb>".$row["type"]."</td>";
  echo "￥";
  echo "<tb>".$row["price"]."</tb>";
  // echo "<tb>".$row["cal"]."</tb>";
  // echo "Kcal";
  echo "<tb>".$row["allEval"]."</tb>";

  // 売り切れ情報を記号で表示
  if($row["sold"] == 't'){
    echo "<tb>".'○'."</tb>";
  }else if($row["sold"] == 'f'){
    echo "<tb>".'×'."</tb>";
  }
  echo "<tb>".$row["date"]."</tb>";
} 

// 接続を解除
pg_close($dbconn);

?>
</body>
</head>
