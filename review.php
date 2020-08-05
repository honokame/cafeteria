<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="review.css" />
  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no" />
</head>

<body>

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
        <form action="TopPage.php" method="post">
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
          
          <input type="hidden" name="menu" value="うどん">
          <textarea id= "review"name="comment" placeholder="コメントを入力してください"></textarea>
          <input id="btn_send" type="submit" name="send" value="送信"/>
      </div>
      </form>
    </div>
  </div>

</body>

</html>