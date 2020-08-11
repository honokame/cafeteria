
<?php

// データベース接続設定
$sv = "localhost";
$name = "team3db";
$user = "team3";
$pass = "1qazxsw23edc";

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
$sql = "SELECT * FROM review";
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
  

  //評価の平均を算出
  
  for($i=0;$i<count($reviewA);$i++){
    $starA += $reviewA[$i]["eval"];
  }
  if(count($reviewA)!=0){
    $starA = round($starA/count($reviewA),2);
  }
  
  for($i=0;$i<count($reviewB);$i++){
    $starB += $reviewB[$i]["eval"];
  }
  if(count($reviewB)!=0){
    $starB = round($starB/count($reviewB),2);
  }

  for($i=0;$i<count($reviewC);$i++){
    $starC += $reviewC[$i]["eval"];
  }
  if(count($reviewC)!=0){
    $starC = round($starC/count($reviewC),2);
  }

  for($i=0;$i<count($reviewD);$i++){
    $starD += $reviewD[$i]["eval"];
  }
  if(count($reviewD)!=0){
    $starD = round($starD/count($reviewD),2);
  }

  for($i=0;$i<count($reviewE);$i++){
    $starE += $reviewE[$i]["eval"];
  }
  if(count($reviewE)!=0){
    $starE = round($starE/count($reviewE),2);
  }

  for($i=0;$i<count($reviewF);$i++){
    $starF += $reviewF[$i]["eval"];
  }
  if(count($reviewF)!=0){
    $starF = round($starF/count($reviewF),2);
  }

  for($i=0;$i<count($reviewG);$i++){
    $starG += $reviewG[$i]["eval"];
  }
  if(count($reviewG)!=0){
    $starG = round($starG/count($reviewG),2);
  }



//総合評価をDBに反映
$sql2 = "UPDATE MENU SET alleval=$starA where menu='カレーライス'";
$res2 = pg_query($dbconn,$sql2) or die("データ書き込みエラー");
$sql3 = "UPDATE MENU SET alleval=$starB where menu='カツカレー'";
$res3 = pg_query($dbconn,$sql3) or die("error1");
$sql4 = "UPDATE MENU SET alleval=$starC where menu='カレーうどん'";
$res4 = pg_query($dbconn,$sql4) or die("error");
$sql5 = "UPDATE MENU SET alleval=$starD where menu='ラーメン'";
$res5 = pg_query($dbconn,$sql5) or die("データ書き込みエラー");
$sql6 = "UPDATE MENU SET alleval=$starE where menu='そば'";
$res6 = pg_query($dbconn,$sql6) or die("error1");
$sql7 = "UPDATE MENU SET alleval=$starF where menu='うどん'";
$res7 = pg_query($dbconn,$sql7) or die("error");
$sql8 = "UPDATE MENU SET alleval=$starG where menu='ライス'";
$res8 = pg_query($dbconn,$sql8) or die("error");





//for($i=0;$i<count($reviewA);$i++){
//  echo $reviewA[$i]["eval"];
//  echo ":";
//  echo $reviewA[$i]["body"];
//  if($i==4) break;
//}
//echo "総合評価:$starA";


 ?>

<!-- <div class="star-rating">
       <div class="star-rating-front" style="width: <?=$starA*20?>%">★★★★★</div>
       <div class="star-rating-back">★★★★★</div>
   </div>
-->