<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ページ設定-->
  <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <title>明石高専学生食堂システム</title>
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
    <button class="logo" name="logo" onclick="location.href='./TopPage.php'"><img src="/team3/DesignImage/logo.png"></button>
    <!--<button class="konzatsu" name="konzatsu"><img src="/team3/DesignImage/level3.png"></button>-->
    <?php require_once 'congestion_out.php'; ?>
    <?php require_once 'today.php'; ?>
    <?php require_once 'review_out.php'; ?>
    <?php require_once 'result_congestion.php'; ?>
    <?php require_once 'result_sold.php'; ?>

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

  <!--ページトップ設定 -->
  <div class="hero"><img src="/team3/DesignImage/hero.png" alt="hero"></div>

  <u>
    <h2>Today's Menu</h2>
  </u>


  <!--メニューレイアウト・ボタン設定-->
  <!--php-->
  <!--当日メニュー配置-->
  <link rel="stylesheet" href="popup.css">
  <div class="Aset">
    <button class="button_A" type="submit" name="A" onclick="location.href='./Aset.php'"><img src="/team3/DesignImage/Aset.png" alt="送信" />Aset</button>
    <p><b><?php echo $dayA["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayA["price"]; ?> <div class="star-rating">
        <div class="star-rating-front" style="width: <?= $starA * 20 ?>%">★★★★★</div>
        <div class="star-rating-back">★★★★★</div>
      </div>
      <p>

  </div>
  <div class="Bset">
    <button class="button_B" type="submit" name="B" onclick="location.href='./Bset.html'"><img src="/team3/DesignImage/Bset.png" alt="送信" /></button>
    <p><b><?php echo $dayB["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayB["price"]; ?></p>
  </div>


  <u>
    <h3>Menu</h3>
  </u>
  <!--常設メニュー配置-->
  <div class="left">
    <button class="button_curry" type="submit" name="curry" onclick="location.href='./curry.php'"><img src="/team3/DesignImage/curry.png" alt="送信" /></button>
    <p><b><?php echo $dayN[0]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[0]["price"]; ?></p>

    <button class="button_miso-ramen" type="submit" name="miso-ramen" onclick="location.href='./miso-ramen.html'"><img src="/team3/DesignImage/miso-ramen.png" alt="送信" /></button>
    <p><b><?php echo $dayN[3]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[3]["price"]; ?></p>

  </div>
  <div class="center">
    <button class="button_katsu-curry" type="submit" name="katsu-curry" onclick="location.href='./katsu-curry.php'"><img src="/team3/DesignImage/katsu-curry.png" alt="送信" /></button>
    <p><b><?php echo $dayN[1]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[1]["price"]; ?></p>

    <button class="button_kakesoba" type="submit" name="kakesoba" onclick="location.href='./kakesoba.html'"><img src="/team3/DesignImage/kakesoba.png" alt="送信" /></button>
    <p><b><?php echo $dayN[4]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[4]["price"]; ?></p>
  </div>

  <div class="right">
    <button class="button_curry-udon" type="submit" name="curry-udon" onclick="location.href='./curry-udon.html'"><img src="/team3/DesignImage/curry-udon.png" alt="送信" /></button>
    <p><b><?php echo $dayN[2]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[2]["price"]; ?></p>
    <button class="button_kakeudon" type="submit" name="kakeudon" onclick="location.href='./kakeudon.html'"><img src="/team3/DesignImage/kakeudon.png" alt="送信" /></button>
    <p><b><?php echo $dayN[5]["menu"]; ?></b></p><br>
    <p>¥<?php echo $dayN[5]["price"]; ?></p>
  </div>

  <button class="button_rice" type="submit" name="rice" onclick="location.href='./rice.html'"><img src="/team3/DesignImage/rice.png" alt="送信" /></button>
  <p><b><?php echo $dayN[6]["menu"]; ?></b></p><br>
  <p>¥<?php echo $dayN[6]["price"]; ?></p>

  <!--売り切れボタン配置、ポップアップ-->
  <div class="pop-box-s1">
    <label for="popup-on-s1">
      <!--<button class="button_urikire" type="submit" style="position:absolute; top:1175px; left:37%" value="value" name="Aセット売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt=""/></button></div></label>-->
      <div class="btn-open-s1"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s1">

    <!-- 閉じる -->
    <div class="popup-s1">
      <label for="popup-on-s1" class="icon-close-s1">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s1">
        <header class="site-header-s1">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayA["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s1" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s1" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayA["menu"]; ?>>
              <input id="btn-send-s1" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s2">
    <label for="popup-on-s2">
      <!-- <button class="button_urikire" type="submit" style="position:absolute; top:1175px; left:97%" value="value" name="Bセット売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s2"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s2">

    <!-- 閉じる -->
    <div class="popup-s2">
      <label for="popup-on-s2" class="icon-close-s2">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s2">
        <header class="site-header-s2">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayB["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s2" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s2" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayB["menu"]; ?>>
              <input id="btn-send-s2" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s3">
    <label for="popup-on-s3">
      <!-- <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:22%" value="value" name="セット売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s3"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s3">

    <!-- 閉じる -->
    <div class="popup-s3">
      <label for="popup-on-s3" class="icon-close-s3">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s3">
        <header class="site-header-s3">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[0]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s3" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s3" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[0]["menu"]; ?>>
              <input id="btn-send-s3" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s4">
    <label for="popup-on-s4">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:55" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s4"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s4">

    <!-- 閉じる -->
    <div class="popup-s4">
      <label for="popup-on-s4" class="icon-close-s4">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s4">
        <header class="site-header-s4">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[1]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s4" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s4" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[1]["menu"]; ?>>
              <input id="btn-send-s4" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s5">
    <label for="popup-on-s5">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:87%" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s5"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s5">

    <!-- 閉じる -->
    <div class="popup-s5">
      <label for="popup-on-s5" class="icon-close-s5">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s5">
        <header class="site-header-s5">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[2]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s5" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s5" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[2]["menu"]; ?>>
              <input id="btn-send-s5" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s6">
    <label for="popup-on-s6">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:22" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s6"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s6">

    <!-- 閉じる -->
    <div class="popup-s6">
      <label for="popup-on-s6" class="icon-close-s6">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s6">
        <header class="site-header-s6">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[3]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s6" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s6" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[3]["menu"]; ?>>
              <input id="btn-send-s6" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s7">
    <label for="popup-on-s7">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:55" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s7"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s7">

    <!-- 閉じる -->
    <div class="popup-s7">
      <label for="popup-on-s7" class="icon-close-s7">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s7">
        <header class="site-header-s7">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[4]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s7" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s7" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[4]["menu"]; ?>>
              <input id="btn-send-s7" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s8">
    <label for="popup-on-s8">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:87" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s8"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s8">

    <!-- 閉じる -->
    <div class="popup-s8">
      <label for="popup-on-s8" class="icon-close-s8">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s8">
        <header class="site-header-s8">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[5]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s8" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s8" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[5]["menu"]; ?>>
              <input id="btn-send-s8" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <div class="pop-box-s9">
    <label for="popup-on-s9">
      <!--  <button class="button_urikire" type="submit" style="position:absolute; top:2625px; left:75" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button> -->
      <div class="btn-open-s9"><img src="/team3/DesignImage/urikire.png" alt="送信"></div>
    </label>
    <input type="checkbox" id="popup-on-s9">

    <!-- 閉じる -->
    <div class="popup-s9">
      <label for="popup-on-s9" class="icon-close-s9">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s9">
        <header class="site-header-s9">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              <div style="padding-bottom: 30px;"> 売切れ情報投稿</div>
              <u><?php echo $dayN[6]["menu"]; ?></u>
              <br><br>
              <input id="btn-select-s9" type="radio" name="button" value=false checked="checked">販売中
              <br><br>
              <input id="btn-select-s9" type="radio" name="button" value=true>売切れ
              <br>
              <input type="hidden" name="soldmenu" value=<?php echo $dayN[6]["menu"]; ?>>
              <input id="btn-send-s9" type="submit" value="投稿" name="send">
          </form>
      </div>
    </div>
  </div>

  <!--売り切れボタン配置
  <button class="button_urikire" type="submit" style="position:absolute; top:1175px; left:39%" value="value" name="Aセット売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1175px; left:90%" value="value" name="Bセット売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1725px; left:24%" value="value" name="カレー売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1725px; left:57%" value="value" name="カツカレー売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1725px; left:90%" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2165px; left:24%" value="value" name="味噌ラーメン売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2165px; left:57%" value="value" name="かけそば売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2165px; left:90%" value="value" name="かけうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2600px; left:85%" value="value" name="ライス売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
-->

  <u>
    <h4>Weekly Menu</h4>
  </u>
  <!--カレンダー-->

  <!--DAY1-->
  <div style="width:100%;margin-top:30px;">
    <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/e8/9d/p/o0300030013113018873.png);border-radius:10px;">
      <div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
        <div style="border:2px dashed #545454;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY1</b><br><?php echo $weekA[0]["menu"]; ?><br><?php echo $weekB[0]["menu"]; ?></div>
      </div>
    </div>
  </div>

  <!--DAY2-->
  <div style="width:100%;margin-top:30px;">
    <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/e8/9d/p/o0300030013113018873.png);border-radius:10px;">
      <div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
        <div style="border:2px dashed #545454;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY2</b><br><?php echo $weekA[1]["menu"]; ?><br><?php echo $weekB[1]["menu"]; ?></div>
      </div>
    </div>
  </div>
  
  <!--DAY3-->
  <div style="width:100%;margin-top:30px;">
    <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/e8/9d/p/o0300030013113018873.png);border-radius:10px;">
      <div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
        <div style="border:2px dashed #545454;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY3</b><br><?php echo $weekA[2]["menu"]; ?><br><?php echo $weekB[2]["menu"]; ?></div>
      </div>
    </div>
  </div>
  </div>
  
  <!--DAY4-->
  <div style="width:100%;margin-top:30px;">
    <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/e8/9d/p/o0300030013113018873.png);border-radius:10px;">
      <div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
        <div style="border:2px dashed #545454;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY4</b><br><?php echo $weekA[3]["menu"]; ?><br><?php echo $weekB[3]["menu"]; ?></div>
      </div>
    </div>
  </div>
  </div>
  
  <!--DAY5-->
  <div style="width:100%;margin-top:30px;">
    <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/e8/9d/p/o0300030013113018873.png);border-radius:10px;">
      <div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
        <div style="border:2px dashed #545454;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY5</b><br><?php echo $weekA[4]["menu"]; ?><br><?php echo $weekB[4]["menu"]; ?></div>
      </div>
    </div>
  </div>
  </div>



  <!--フッター設定-->
  <footer class="site-footer">
    <p class="copyright">@2020 e16_team3</p>
  </footer>


</body>

</htlm>