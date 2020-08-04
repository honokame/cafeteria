<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--ページ設定-->
    <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>明石高専学生食堂システム</title>
    <link rel="stylesheet" href="style.css">

    <script language=”javascript”>resizeTo(640,1136);</script>
  </head>

  <body>

    <!--ヘッダー設定-->
    <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./TopPage.html'"><img src="DesignImage/logo.jpeg"></button>
    <button class="konzatsu" name="konzatsu"><img src="DesignImage/混雑3.jpeg"></button>
    </header>

    <!--ページトップ設定 -->
    <div class="hero"><img src="DesignImage/hero.jpeg" alt="hero"></div>

    <u><h2>本日のセットメニュー</h2></u>


    <!--メニューレイアウト・ボタン設定-->
    <!--php-->
   <?php include 'today.php';?>


    <!--当日メニュー配置-->
    <div class = "Aset">
      <button class="button_A" type="submit" name="A" onclick="location.href='./Aset.html'"><img src="透過イメージ/Aセット.png" alt="送信" /></button>
    </div>
    <div class = "Bset">
      <button class="button_B" type="submit" name="B" onclick="location.href='./Bset.html'"><img src="透過イメージ/Bセット.png" alt="送信" /></button>
    </div>


    <u><h3>常設メニュー</h3></u>
    <!--常設メニュー配置-->
    <div class = "left">
      <button class="button_curry" type="submit" name="curry" onclick="location.href='./curry.html'"><img src="透過イメージ/カレー.png" alt="送信" /></button>
      <button class="button_miso-ramen" type="submit" name="miso-ramen" onclick="location.href='./miso-ramen.html'"><img src="透過イメージ/味噌ラーメン.png" alt="送信" /></button>
    </div>
    <div class = "center">
      <button class="button_katsu-curry" type="submit" name="katsu-curry" onclick="location.href='./katsu-curry.html'"><img src="透過イメージ/カツカレー.png" alt="送信" /></button>
      <button class="button_kakesoba" type="submit" name="kakesoba" onclick="location.href='./kakesoba.html'"><img src="透過イメージ/かけそば.png" alt="送信" /></button>
    </div>
    <div class = "right">
      <button class="button_curry-udon" type="submit" name="curry-udon" onclick="location.href='./curry-udon.html'"><img src="透過イメージ/カレーうどん.png" alt="送信" /></button>
      <button class="button_kakeudon" type="submit" name="kakeudon" onclick="location.href='./kakeudon.html'"><img src="透過イメージ/かけうどん.png" alt="送信" /></button>
    </div>
    <button class="button_rice" type="submit" name="rice" onclick="location.href='./rice.html'"><img src="透過イメージ/ライス.png" alt="送信" /></button>


    <!--売り切れボタン配置-->
    <button class="button_urikire" type="submit" style="position:absolute; top:1225px; left:40%" value="value" name="Aセット売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:1225px; left:90%" value="value" name="Bセット売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:1775px; left:25%" value="value" name="カレー売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:1775px; left:58%" value="value" name="カツカレー売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:1775px; left:90%" value="value" name="カレーうどん売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:2100px; left:25%" value="value" name="味噌ラーメン売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:2100px; left:58%" value="value" name="かけそば売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:2100px; left:90%" value="value" name="かけうどん売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>
    <button class="button_urikire" type="submit" style="position:absolute; top:2425px; left:80%" value="value" name="ライス売り切れボタン"><img src="DesignImage/売り切れマーク.png" alt="送信" /></button>



    <u><h4>週間メニュー</h4></u>
    <!--カレンダー-->
    <div class = "DAY1">
      <div class="WeeklyMenu"><?php echo $weekB[0]["menu"];?></div>
    </div>

    <div class = "DAY2">
      <div class="WeeklyMenu"><?php echo $weekB[1]["menu"];?></div>
    </div>

    <div class = "DAY3">
      <div class="WeeklyMenu"><?php echo $weekB[2]["menu"];?></div>
    </div>

    <div class = "DAY4">
      <div class="WeeklyMenu"><?php echo $weekB[3]["menu"];?></div>
    </div>

    <div class = "DAY5">
      <div class="WeeklyMenu"><?php echo $weekB[4]["menu"];?></div>
    </div>


    <!--フッター設定-->
    <footer class="site-footer">
      <p class="copyright">@2020 e16_team3</p>
    </footer>


  </body>

</htlm>
