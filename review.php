<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="review.css" />
  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no" />
</head>

<body>

  <!-- 送信フォーム -->
  <!-- レビューを書くボタンを押す -->
  <div class="pop-box">
    <label for="popup-on">
      <div class="btn-open">
        <span>レビューを書く</span>
    </label>
    <input type="checkbox" id="popup-on">

    <!-- 閉じる -->
    <div class="popup">
      <label for="popup-on" class="icon-close">×</label>

      <!-- ウィンドウの中身 -->
      <div class="popup-content">
        <form action="review.php" method="POST">
          <p style="margin-bottom: 1em;">
          <p align= "left"><u>たこ焼き</u></p>
          <p style = "margin-bottom:1em;">

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
          <p style="margin-bottom: 2em;">

          <textarea id= "review"name="comment" placeholder="コメントを入力してください"></textarea>
          <input id="btn_send" type="submit" name="send" value="送信"/>
      </div>
      </form>
    </div>
  </div>

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
    $menu = 'たこ焼き';
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

</body>

</html>