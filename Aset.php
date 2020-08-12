<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--ページ設定-->
    <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>明石高専学生食堂システム/Aセット-詳細ページ</title>
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
      

<!-- <div class="star-rating">
       <div class="star-rating-front" style="width: 60%">★★★★★</div>
       <div class="star-rating-back">★★★★★</div>
   </div>
-->

    <!--menuImage-->
    <div class="MenuImage" style="text-align:center"><img src="/team3/DesignImage/Aset.png" alt="menu"></div>

    <!--メニュー名-->
    <h5>豚バラ焼肉のおろしだれ</h5>
    <br>
    <!--価格・カロリー情報-->
    <h6>¥430</h6><h7>カロリー：896kcal</h7>

    <!--レビュー吹き出し-->
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>39</b><br />
Array</p>
    </div>
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>42</b><br />
Array</p>
    </div>
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>45</b><br />
Array</p>
    </div>
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>48</b><br />
Array</p>
    </div>
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>51</b><br />
Array</p>
    </div>
    <div class="box25">
      <p>3<br />
<b>Notice</b>:  Array to string conversion in <b>/home/team3/public_html/Aset.php</b> on line <b>54</b><br />
Array</p>
    </div>

    <!--レビュー書き込みボタン-->
    <div class="pop-box">
    <label for="popup-on">
      <div class="btn-open">
        <span>レビューを書く</span> <!--ボタン-->
    </label>
    <input type="checkbox" id="popup-on">

    <!-- 閉じる -->
    <div class="popup">
      <label for="popup-on" class="icon-close">×</label>

      <!-- ウィンドウの中身 -->
      <div class="popup-content">
        <form action="TopPage.php" method="post">
          <p style="margin-bottom: 1em;">
          <p align= "left"><u>カレーライス</u></p>
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
          
          <input type="hidden" name="menu" value="カレーライス">
          <textarea id= "review"name="comment" placeholder="コメントを入力してください"></textarea>
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
