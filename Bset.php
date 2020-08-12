<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--ページ設定-->
    <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>明石高専学生食堂システム/Bセット-詳細ページ</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <script language=”javascript”>resizeTo(640,1136);</script>
  </head>

  <body>
    <!--ヘッダー設定-->
    <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./TopPage.php'"><img src="/team3/DesignImage/logo.png"></button>
    <button class="konzatsu"><img src="/team3/DesignImage/level3.png" name="konzatsu"></button>
    </header>

    <!--サブページ設定-->

    <!--php-->
   <?php include 'today.php';?>
   <?php include 'review_out.php';?>


    <!--menuImage-->
    <div class="MenuImage" style="text-align:center"><img src="/team3/DesignImage/Bset.png" alt="menu"></div>

    <!--メニュー名-->
    <h5><?php echo $dayB["menu"];?></h5>
    <br>
    <!--価格・カロリー情報-->
    <h6>¥<?php echo $dayB["price"];?></h6><h7>カロリー：<?php echo $dayB["cal"];?>kcal</h7>



    <!--フッター設定-->
    <footer class="site-footer">
      <p class="copyright">@2020 e16_team3</p>
    </footer>
  </body>
