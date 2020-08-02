<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no" />
</head>

<body>

  <style type="text/css">
    /* 星の細かいパラメータ */
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
      font-size: 70px;
    }

    .evaluation label .text {
      position: absolute;
      text-align: left;
      font-size: 20px;
      color: gray;
    }

    .evaluation label:hover,
    .evaluation label:hover~label,
    .evaluation input[type='radio']:checked~label {
      color: #ffcc00;
    }

    * {
      box-sizing: border-box;
    }

    /* レビューポップアップ */
    /* ウインドウ */
    .popup {
      background-color: #fff;
      box-shadow: 0 0 0 9999px rgba(0, 0, 0, .8);
      display: none;
      position: fixed;
      top: 10%;
      left: 0%;
      right: 0%;
      bottom: 20%;
      margin: auto;
      width: 600px;
      height: 800px;
    }

    /* チェックボックスの初期設定 */
    #popup-on {
      display: none;
    }

    /* チェックされたらポップアップウインドウを開く */
    #popup-on:checked+.popup {
      display: block;
    }

    /* 閉じる */
    .icon-close {
      background: #fff;
      color: #808080;
      font-size: 80px;
      padding: 0 10px;
      position: absolute;
      right: 0;
    }

    /* 開く */
    .btn-open {
      display: block;
      background-color: #01b6ed;
      border-radius: 10px;
      color: #333;
      padding: 10px;
      cursor: pointer;
      margin: 10px auto;
      width: 200px;
      text-align: center;
    }

    /* ポップアップの内容 */
    .popup-content {
      margin: 40px auto 40px auto;
      width: 90%;
      font-size: 30px;
    }
  </style>

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
          たこ焼き<br>

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
          <textarea name="comment" placeholder="コメントを入力してください" cols="28" rows="11" style="font-size: 25px;"></textarea><br />
          <input type="submit" name="send" value="送信" />
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