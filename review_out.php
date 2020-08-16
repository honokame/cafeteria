
<?php

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "oshkmr1435";

// 表示文字コード
$display_enc = "UTF-8";

// 関数ーデータの文字コードを変換
//function conv_dbdata($string,$enc){
//  $det_enc = mb_detect_encoding($string); // エンコーディングを返す

  // 何しとるか分からん、変換したいコードに変換してるっぽい
//  if($det_enc and $det_enc != $enc){
//    return mb_convert_encoding($string,$enc,$det_enc);
//  }
//  else{
//    return $string;
//  }
//}

// データベースに接続
$dbconn = pg_connect("host = $sv dbname = $name user = $user password = $pass") or die("接続エラー");

// データを取り出す
$sql = "SELECT * FROM review ORDER BY date DESC";
$res = pg_query($dbconn,$sql) or die("データ読み込みエラー");


  $row = pg_fetch_all($res);
  $starA = 0;//カレーライス
  $starB = 0;//カツカレー
  $starC = 0;//カレーうどん
  $starD = 0;//ラーメン
  $starE = 0;//そば
  $starF = 0;//うどん
  $starG = 0;//ライス
  $reviewA = array();
  $reviewB = array();
  $reviewC = array();
  $reviewD = array();
  $reviewE = array();
  $reviewF = array();
  $reviewG = array();

  foreach($row as $normal){
    if($normal["menu"] == "カレーライス"){
      array_push($reviewA,$normal);
    }else if($normal["menu"] == "カツカレー"){
      array_push($reviewB,$normal);
    }else if($normal["menu"] == "カレーうどん"){
      array_push($reviewC,$normal);
    }else if($normal["menu"] == "ラーメン"){
      array_push($reviewD,$normal);
    }else if($normal["menu"] == "そば"){
      array_push($reviewE,$normal);
    }else if($normal["menu"] == "うどん"){
      array_push($reviewF,$normal);
    }else if($normal["menu"] == "ライス"){
      array_push($reviewG,$normal);
    }
  }

//レビューの個数を代入
$countA = count($reviewA);
$countB = count($reviewB);
$countC = count($reviewC);
$countD = count($reviewD);
$countE = count($reviewE);
$countF = count($reviewF);
$countG = count($reviewG);

  //評価の平均を算出
  //カレーライス
  for($i=0;$i<6;$i++){
	if($i>=$countA){
		$reviewA[$i]["eval"] = 0;
		$reviewA[$i]["body"] = "レビューがありません";
	}
  }
  for($i=0;$i<$countA;$i++){
  $starA += $reviewA[$i]["eval"];
}
if ($countA != 0) {
  $starA = round($starA / $countA, 2);
}

//カツカレー
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countB) {
    $reviewB[$i]["eval"] = 0;
    $reviewB[$i]["body"] = "レビューがありません";
  }
}
for ($i = 0; $i < $countB; $i++) {
  $starB += $reviewB[$i]["eval"];
}
if ($countB != 0) {
  $starB = round($starB / $countB, 2);
}

//カレーうどん
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countC) {
    $reviewC[$i]["eval"] = 0;
    $reviewC[$i]["body"] = "レビューがありません";
  }
}

for ($i = 0; $i < $countC; $i++) {
  $starC += $reviewC[$i]["eval"];
}
if ($countC != 0) {
  $starC = round($starC / $countC, 2);
}

//ラーメン
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countD) {
    $reviewD[$i]["eval"] = 0;
    $reviewD[$i]["body"] = "レビューがありません";
  }
}
for ($i = 0; $i < $countD; $i++) {
  $starD += $reviewD[$i]["eval"];
}
if ($countD != 0) {
  $starD = round($starD / $countD, 2);
}

//そば
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countE) {
    $reviewE[$i]["eval"] = 0;
    $reviewE[$i]["body"] = "レビューがありません";
  }
}
for ($i = 0; $i < $countE; $i++) {
  $starE += $reviewE[$i]["eval"];
}
if ($countE != 0) {
  $starE = round($starE / $countE, 2);
}

//うどん
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countF) {
    $reviewF[$i]["eval"] = 0;
    $reviewF[$i]["body"] = "レビューがありません";
  }
}
for ($i = 0; $i < $countF; $i++) {
  $starF += $reviewF[$i]["eval"];
}
if ($countF != 0) {
  $starF = round($starF / $countF, 2);
}

//ライス
for ($i = 0; $i < 6; $i++) {
  if ($i >= $countG) {
    $reviewG[$i]["eval"] = 0;
    $reviewG[$i]["body"] = "レビューがありません";
  }
}
for ($i = 0; $i < $countG; $i++) {
  $starG += $reviewG[$i]["eval"];
}
if ($countG != 0) {
  $starG = round($starG / $countG, 2);
}

//総合評価をDBに反映
$sql2 = "UPDATE MENU SET alleval=$starA where menu='カレーライス'";
$res2 = pg_query($dbconn, $sql2) or die("データ書き込みエラー");
$sql3 = "UPDATE MENU SET alleval=$starB where menu='カツカレー'";
$res3 = pg_query($dbconn, $sql3) or die("error1");
$sql4 = "UPDATE MENU SET alleval=$starC where menu='カレーうどん'";
$res4 = pg_query($dbconn, $sql4) or die("error");
$sql5 = "UPDATE MENU SET alleval=$starD where menu='ラーメン'";
$res5 = pg_query($dbconn, $sql5) or die("データ書き込みエラー");
$sql6 = "UPDATE MENU SET alleval=$starE where menu='そば'";
$res6 = pg_query($dbconn, $sql6) or die("error1");
$sql7 = "UPDATE MENU SET alleval=$starF where menu='うどん'";
$res7 = pg_query($dbconn, $sql7) or die("error");
$sql8 = "UPDATE MENU SET alleval=$starG where menu='ライス'";
$res8 = pg_query($dbconn, $sql8) or die("error");

//for($i=0;$i<count($reviewA);$i++){
//  echo $reviewA[$i]["eval"];
//  echo ":";
//  echo $reviewA[$i]["body"];
//  if($i==4) break;
//}
//echo "総合評価:$starA";


?>