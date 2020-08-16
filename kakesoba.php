<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ページ設定-->
  <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <title>明石高専学生食堂システム/そば-詳細ページ</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="popup.css">
  <link rel="stylesheet" href="star.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script language=”javascript”>
    resizeTo(640, 1136);
  </script>
</head>

<body>
  <!--ヘッダー設定-->
  <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./index.php'"><img src="/team3/DesignImage/logo.png"></button>
    
    <!--php-->
    <?php require_once 'congestion_out.php'; ?>
    <?php require_once 'today.php'; ?>
    <?php require_once 'review_out.php'; ?>
    <?php require_once 'result_congestion.php';?>

    <!-- 混雑情報ポップアップ -->
    <div class="pop-box-c">

      <label for="popup-on-c">
        <div class="btn-open-c"><img src="/team3/DesignImage/<?php echo $status; ?>"></div>
      </label>
      <input type="checkbox" id="popup-on-c">

      <!-- 閉じる -->
      <div class="popup-c">
        <label for="popup-on-c" class="icon-close-c">×</label>
        <!-- ウィンドウの中身 -->
        <div class="popup-content-c">
          <header class="site-header-c">
            <form method="post" action="index.php">
              <p style="margin-bottom: 1em;">
                <div style="padding-bottom: 30px;"> 混雑情報投稿</div>
                <br>
                <input id="btn-select-c" type="radio" name="button" value=0>ガラガラ
                <br><br>
                <input id="btn-select-c" type="radio" name="button" value=1 checked="checked">普通
                <br><br>
                <input id="btn-select-c" type="radio" name="button" value=2>混雑
                <br>
                <input id="btn-send-c" type="submit" value="投稿" name="send1">
            </form>
        </div>
      </div>
    </div>
  </header>

  <!--サブページ設定-->

  <!--menuImage-->
  <div class="MenuImage" style="text-align:center"><img src="/team3/DesignImage/kakesoba.png" alt="menu"></div>

  <!--メニュー名-->
  <h5><?php echo $dayN[4]["menu"]; ?></h5>
  <br>
  <!--価格・カロリー情報-->
  <h6>¥<?php echo $dayN[4]["price"]; ?><br><?php echo $dayN[4]["cal"]; ?>kcal</h6>

  <!--総合評価-->
  <h6>
    <div class="star-rating">
      <div class="star-rating-front" style="width: <?= $starE * 20 ?>%">★★★★★</div>
      <div class="star-rating-back">★★★★★</div>
  </h6>

  <!--レビュー吹き出し-->
  <div class="box25">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[0]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;<?php echo $reviewE[0]["body"]; ?></div>
    </nobr>
  </div>
  </div>
  </div>

  <div class="box26">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[1]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;
          <?php echo $reviewE[1]["body"]; ?></div>
    </nobr>
  </div>
  </div>
  </div>

  <div class="box27">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[2]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;
          <?php echo $reviewE[2]["body"]; ?></div>
    </nobr>
  </div>
  </div>
  </div>

  <div class="box28">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[3]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;
          <?php echo $reviewE[3]["body"]; ?></div>
    </nobr>
  </div>
  </div>
  </div>

  <div class="box29">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[4]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;
          <?php echo $reviewE[4]["body"]; ?></div>
    </nobr>
  </div>
  </div>
  </div>

  <div class="box30">
    <nobr>
      <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $reviewE[5]["eval"] * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★
          &nbsp;
          <?php echo $reviewE[5]["body"]; ?>
        </div>
    </nobr>
  </div>
  </div>
  </div>

  <!--レビュー書き込みボタン-->
  <div class="pop-box">
    <label for="popup-on">
      <div class="btn-open">
        <span>レビューを書く</span>
        <!--ボタン-->
    </label>
    <input type="checkbox" id="popup-on">

    <!-- 閉じる -->
    <div class="popup">
      <label for="popup-on" class="icon-close">×</label>

      <!-- ウィンドウの中身 -->
      <div class="popup-content">
        <form action="index.php" method="post">
          <p style="margin-bottom: 1em;">
            <p align="left"><u>そば</u></p>
            <p style="margin-bottom:1em;">

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

                <input type="hidden" name="menu" value="そば">
                <textarea id="review" name="comment" placeholder="コメントを入力してください"></textarea>
                <input id="btn_send" type="submit" name="send" value="送信">
      </div>
      </form>
    </div>
  </div>

  <!--フッター設定-->
  <footer class="site-footer">
    <p class="copyright">@2020 e16_team3</p>
  </footer>
</body>
