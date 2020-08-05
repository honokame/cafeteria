<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ページ設定-->
  <meta name="viewport" devicewidth="width=640,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <meta name="viewport" content="user-scalable=no" />
  <title>明石高専学生食堂システム/かけそば-詳細ページ</title>
  <link rel="stylesheet" href="style.css">
  <script language=”javascript”>
    resizeTo(640, 1136);
  </script>
</head>

<body>
  <!--ヘッダー設定-->
  <header class="site-header">
    <button class="logo" name="logo" onclick="location.href='./TopPage.html'"><img src="DesignImage/logo.jpeg"></button>
    <button class="konzatsu"><img src="DesignImage/混雑3.jpeg" name="konzatsu"></button>
  </header>

  <!--サブページ設定-->
  <!--menuImage-->
  <div class="MenuImage" style="text-align:center"><img src="イメージ/かけそば.png" alt="menu"></div>

  <!--レビュー吹き出し-->
  <div class="box25">
    <p>ここに文章</p>
  </div>
  <div class="box25">
    <p>ここに文章</p>
  </div>
  <div class="box25">
    <p>ここに文章</p>
  </div>
  <div class="box25">
    <p>ここに文章</p>
  </div>
  <div class="box25">
    <p>ここに文章</p>
  </div>
  <div class="box25">
    <p>ここに文章</p>
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
        <form action="TopPage.php" method="post">
          <p style="margin-bottom: 1em;">
            <p align="left"><u>かけそば</u></p>
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

                <input type="hidden" name="menu" value="かけそば">
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

</html>