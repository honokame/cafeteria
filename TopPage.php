<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ページ設定-->
  <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <title>明石高専学生食堂システム</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <script language=”javascript”>
    resizeTo(640, 1136);
  </script>
</head>

<body>

  <!--ヘッダー設定-->
  <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./TopPage.php'"><img src="/team3/DesignImage/logo.jpeg"></button>
    <button class="konzatsu" name="konzatsu"><img src="/team3/DesignImage/level3.jpeg"></button>
  </header>

  <!--ページトップ設定 -->
  <div class="hero"><img src="/team3/DesignImage/hero.jpeg" alt="hero"></div>

  <u>
    <h2>きょうのセットメニュー</h2>
  </u>


  <!--メニューレイアウト・ボタン設定-->
  <!--php-->
  <?php include 'result_sold.php'; ?>
  <?php include 'today.php'; ?>
  <?php include 'result_review.php'; ?>
  <!--当日メニュー配置-->
  <div class="Aset">
    <button class="button_A" type="submit" name="A" onclick="location.href='./Aset.php'"><img src="/team3/DesignImage/Aset.png" alt="送信" />Aset</button>
  </div>
  <div class="Bset">
    <button class="button_B" type="submit" name="B" onclick="location.href='./Bset.html'"><img src="/team3/DesignImage/Bset.png" alt="送信" /></button>
  </div>


  <u>
    <h3>メニュー</h3>
  </u>
  <!--常設メニュー配置-->
  <div class="left">
    <button class="button_curry" type="submit" name="curry" onclick="location.href='./curry.php'"><img src="/team3/DesignImage/curry.png" alt="送信" /></button>
    <p><b>カレーライス</b></p><br>
    <p>¥200</p>

    <button class="button_miso-ramen" type="submit" name="miso-ramen" onclick="location.href='./miso-ramen.php'"><img src="/team3/DesignImage/miso-ramen.png" alt="送信" /></button>
    <p><b>味噌ラーメン</b></p><br>
    <p>¥200</p>

  </div>
  <div class="center">
    <button class="button_katsu-curry" type="submit" name="katsu-curry" onclick="location.href='./katsu-curry.php'"><img src="/team3/DesignImage/katsu-curry.png" alt="送信" /></button>
    <p><b>カツカレー</b></p><br>
    <p>¥200</p>

    <button class="button_kakesoba" type="submit" name="kakesoba" onclick="location.href='./kakesoba.php'"><img src="/team3/DesignImage/kakesoba.png" alt="送信" /></button>
    <p><b>かけそば</b></p><br>
    <p>¥200</p>
  </div>

  <div class="right">
    <button class="button_curry-udon" type="submit" name="curry-udon" onclick="location.href='./curry-udon.php'"><img src="/team3/DesignImage/curry-udon.png" alt="送信" /></button>
    <p><b>カレーうどん</b></p><br>
    <p>¥200</p>
    <button class="button_kakeudon" type="submit" name="kakeudon" onclick="location.href='./kakeudon.php'"><img src="/team3/DesignImage/kakeudon.png" alt="送信" /></button>
    <p><b>かけうどん</b></p><br>
    <p>¥200</p>
  </div>

  <button class="button_rice" type="submit" name="rice" onclick="location.href='./rice.php'"><img src="/team3/DesignImage/rice.png" alt="送信" /></button>
  <p><b>ライス</b></p><br>
  <p>¥200</p>

  <!--売り切れボタン配置-->
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

  <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:22%" value="value" name="カレー売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:55%" value="value" name="カツカレー売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:1700px; left:87%" value="value" name="カレーうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:22%" value="value" name="味噌ラーメン売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:55%" value="value" name="かけそば売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2200px; left:87%" value="value" name="かけうどん売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>
  <button class="button_urikire" type="submit" style="position:absolute; top:2625px; left:75%" value="value" name="ライス売り切れボタン"><img src="/team3/DesignImage/urikire.png" alt="送信" /></button>



  <u>
    <h4>週間メニュー</h4>
  </u>
  <!--カレンダー-->
  <div class="L_column">
    <!--DAY1-->
    <div style="width:100%;margin-top:30px;">
      <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px 5px;padding:15px;text-align:center;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/0a/9b/p/o0300030013113018867.png);border-radius:10px;">
	<div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
	  <div style="border:2px dashed #e6e3e0;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY1</b><br><?php echo $weekA[0]["menu"]; ?><br><?php echo $weekB[0]["menu"]; ?></div>
	</div>
      </div>
    </div>
    <!--DAY4-->
    <div style="width:100%;margin-top:30px;">
      <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/0a/9b/p/o0300030013113018867.png);border-radius:10px;">
	<div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
	  <div style="border:2px dashed #e6e3e0;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY4</b><br><?php echo $weekA[3]["menu"]; ?><br><?php echo $weekB[3]["menu"]; ?></div>
	</div>
      </div>
    </div>
  </div>

  <div class="C_column">
    <!--DAY2-->
    <div style="width:100%;margin-top:30px;">
      <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/0a/9b/p/o0300030013113018867.png);border-radius:10px;">
	<div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
	  <div style="border:2px dashed #e6e3e0;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY2</b><br><?php echo $weekA[1]["menu"]; ?><br><?php echo $weekB[1]["menu"]; ?></div>
	</div>
      </div>
    </div>
    <!--DAY5-->
    <div style="width:100%;margin-top:30px;">
      <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/0a/9b/p/o0300030013113018867.png);border-radius:10px;">
	<div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
	  <div style="border:2px dashed #e6e3e0;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY5</b><br><?php echo $weekA[4]["menu"]; ?><br><?php echo $weekB[4]["menu"]; ?></div>
	</div>
      </div>
    </div>
  </div>

  <div class="R_column">
    <!--DAY3-->
    <div style="width:100%;margin-top:30px;">
      <div class="l-border l-p-t l-p-r l-p-b l-p-l" style="margin:10px;padding:15px;word-break:break-all;color:#333;box-shadow:1px 1px 2px rgba(0,0,0,0.3);background:url(https://stat.ameba.jp/user_images/20141029/18/wazameba/0a/9b/p/o0300030013113018867.png);border-radius:10px;">
	<div style="background:rgba(255,255,255,0.85);padding:5px;border-radius:5px;text-align:center;">
	  <div style="border:2px dashed #e6e3e0;border-radius:5px;padding-top:30px;padding-bottom:30px;"><b>DAY3</b><br><?php echo $weekA[2]["menu"]; ?><br><?php echo $weekB[2]["menu"]; ?></div>
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
