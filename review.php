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
      padding: 20px 20px 0;
      color: gray;
      cursor: pointer;
      font-size: 80px;
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
      border-radius: 25px;
      border-color: #cccccc;
      box-shadow: 0 0 0 9999px rgba(255,255,255,0.5);
      display: none;
      position: fixed;
      border: solid;
      top: 10%;
      left: 0%;
      right: 0%;
      bottom: 20%;
      margin: auto;
      width: 800px;
      height: 900px;
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
      background: rgba(255,255,255,0);
      color: #808080;
      font-size: 100px;
      padding: 0 40px;
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
      font-size: 40px;
    }
    
    input#btn_send{
      background-color: #1a1aff;
      border-style: none;
      font-size: 30pt;
      color: #fff;
      width: 600px;
      height: 80px;
    }

    textarea#review{
      width: 600px;
      height: 450px;
      font-size: 35px;
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