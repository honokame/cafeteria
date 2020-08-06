<html>

<head>
  <link rel="stylesheet" type="text/css" href="sold.css" />
  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no" />
  <title>sold</title>
</head>

<body>
  <!-- 送信フォーム -->
  <!-- レビューを書くボタンを押す -->
  <div class="pop-box-s">
    <label for="popup-on-s">
      <div class="btn-open-ss">
        <span>売り切れ情報</span>
        <!--ボタン-->
    </label>
    <input type="checkbox" id="popup-on-s">

    <!-- 閉じる -->
    <div class="popup-s">
      <label for="popup-on-s" class="icon-close-s">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content-s">
        <header class="site-header-s">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              売切れ情報投稿<br><br>
              <u>カレーライス</u><br>
              <p style="margin-bottom: 1em;">
                <input id="btn_select-s" type="radio" name="button" value=false checked="checked">販売中
                <br><br>
                <input id="btn_select-s" type="radio" name="button" value=true>売切れ
                <br><br>
                <input type="hidden" name="soldmenu" value="カレーライス">
                <input id="btn_send-s" type="submit" value="投稿" name="send">
          </form>
</body>

</html>