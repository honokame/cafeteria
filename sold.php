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
  <div class="pop-box">
    <label for="popup-on">
      <div class="btn-open">
        <span>売り切れ情報</span>
        <!--ボタン-->
    </label>
    <input type="checkbox" id="popup-on">

    <!-- 閉じる -->
    <div class="popup">
      <label for="popup-on" class="icon-close">×</label>
      <!-- ウィンドウの中身 -->
      <div class="popup-content">
        <header class="site-header">
          <form method="post" action="TopPage.php">
            <p style="margin-bottom: 1em;">
              売切れ情報投稿<br><br>
              <u>カレーライス</u><br>
              <p style="margin-bottom: 1em;">
                <input id="btn_select" type="radio" name="button" value=false checked="checked">販売中
                <br><br>
                <input id="btn_select" type="radio" name="button" value=true>売切れ
                <br><br>
                <input type="hidden" name="soldmenu" value="カレーライス">
                <input id="btn_send" type="submit" value="投稿" name="send">
          </form>
</body>

</html>