<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ページ設定-->
  <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <title>明石高専学生食堂システム/Bセット-詳細ページ</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="popup.css"
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script language=”javascript”>
    resizeTo(640, 1136);
  </script>
</head>

<body>
  <!--ヘッダー設定-->
  <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./TopPage.php'"><img src="/team3/DesignImage/logo.png"></button>

  <!--php-->
  <?php require_once 'congestion_out.php'; ?>
  <?php require_once 'today.php'; ?>
  <?php require_once 'result_congestion.php'; ?>

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
          <form method="post" action="TopPage.php">
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
  <div class="MenuImage" style="text-align:center"><img src="/team3/DesignImage/Bset.png" alt="menu"></div>

  <!--メニュー名-->
  <h5><?php echo $dayB["menu"]; ?></h5>
  <br>
  <!--価格・カロリー情報-->
  <h6>¥<?php echo $dayB["price"]; ?></h6>
  <h7>カロリー：<?php echo $dayB["cal"]; ?>kcal</h7>



  <!--フッター設定-->
  <footer class="site-footer">
    <p class="copyright">@2020 e16_team3</p>
  </footer>
</body>