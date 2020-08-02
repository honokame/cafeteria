<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>

<body>
  <!-- 星の細かいパラメータ -->
  <style type="text/css">
    .evaluation {
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
    }

    .evaluation input[type='radio'] {
      display: none;
    }

    .evaluation label {
      position: relative;
      padding: 10px 10px 0;
      color: gray;
      cursor: pointer;
      font-size: 50px;
    }

    .evaluation label .text {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      text-align: center;
      font-size: 12px;
      color: gray;
    }

    .evaluation label:hover,
    .evaluation label:hover~label,
    .evaluation input[type='radio']:checked~label {
      color: #ffcc00;
    }
  </style>

  <!-- 送信フォーム -->
  <form action="review.php" method="POST">
    
    <!-- 星の表示 -->
    <div class="evaluation">
      <input id="star1" type="radio" name="star" value="5" />
      <label for="star1">★</label>
      <input id="star2" type="radio" name="star" value="4" />
      <label for="star2">★</label>
      <input id="star3" type="radio" name="star" value="3" />
      <label for="star3">★</label>
      <input id="star4" type="radio" name="star" value="2" />
      <label for="star4">★</label>
      <input id="star5" type="radio" name="star" value="1" />
      <label for="star5">★</label>
    </div>

    <p>コメント</p>
    <textarea name="comment" cols="50" rows="5">
    </textarea><br /><input type="submit" name="send" value="送信" />
  </form>

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
    $star = $_POST['star'];
    
    // コメントのみのとき
    if($star == null){
      $star = 0;
    }
    
    $comment = $_POST["comment"];
    $sql = "insert into review values('たこ焼き',$star,'$comment','$today')";
    $res = pg_query($dbconn, $sql) or die("データ読み込みエラー");
  }

  ?>
</body>
</html>