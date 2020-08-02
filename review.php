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

    * {
      box-sizing: border-box;
    }

    /* ポップアップウインドウの設定 */
    .popup {
      background-color: #efefef;
      box-shadow: 0 0 0 9999px rgba(0, 0, 0, .8);
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      width: 70vw;
      height: 55vw;
      overflow-y: scroll;
    }

    /* チェックボックスの初期設定 */
    #popup-on {
      display: none;
    }

    /* チェックされたらポップアップウインドウを開く */
    #popup-on:checked+.popup {
      display: block;
    }

    /* 閉じるアイコン（右上） */
    .icon-close {
      background: #000;
      color: #fff;
      font-size: 30px;
      padding: 0 10px;
      position: absolute;
      right: 0;
    }

    /* 閉じるボタン */
    .btn-close {
      background: #000;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      cursor: pointer;
      margin: 10px auto;
      width: 95%;
      text-align: center;
    }

    /* 開くボタン */
    .btn-open {
      background: #fff;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      cursor: pointer;
      margin: 10px auto;
      width: 95%;
      text-align: center;
    }

    /* ポップアップの内容 */
    .popup-content {
      margin: 40px auto 40px auto;
      width: 90%;
    }
  </style>

  <!-- 送信フォーム -->
  <div class="pop-box">
    <label for="popup-on"><label for="popup-on">
        <div class="btn-open"><img src="https://homepagenopro.com/wp-content/uploads/2018/08/d11_img_mizudori.png" alt="" class="layer-img"></div>
      </label>
      <input type="checkbox" id="popup-on">
      <div class="popup">
        <label for="popup-on" class="icon-close">×</label>
        <div class="popup-content">
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
        </div>
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
    $star = $_POST['star'];

    // コメントのみのとき
    if ($star == null) {
      $star = 0;
    }

    $comment = $_POST["comment"];
    $sql = "insert into review values('たこ焼き',$star,'$comment','$today')";
    $res = pg_query($dbconn, $sql) or die("データ読み込みエラー");
  }

  ?>
</body>

</html>