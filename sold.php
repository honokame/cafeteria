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
        <form>
          <p style="margin-bottom: 1em;">
            売切れ情報投稿<br><br>
            <u>カレーライス</u><br>
            <p style="margin-bottom: 1em;"> 
              <input id="btn_select" type="radio" name="button" value=false checked="checked">販売中
              <br>
              <input id="btn_select" type="radio" name="button" value=true>売切れ
              <br><br>
              <input id="btn_send" type="submit" value="投稿">
        </form>

        <?php
        $disp_enc = "UTF-8";
        $selmenu = "カレーライス";
        $conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
        $value = $_GET['button'];
        $sql = "update menu set sold=$value where menu='$selmenu'";
        $res = pg_query($conn, $sql);
        $sql2 = "select sold from menu where menu='$selmenu'";
        $res2 = pg_query($conn, $sql2) or die("error3");
        $x = pg_fetch_array($res2, 0, PGSQL_ASSOC);
        //echo $x["sold"];
        if ($x["sold"] == 't') {
          $cross = 'image/r_cross.jpeg';
        } else {
          $cross = 'image/g_cross.jpeg';
        }
        //echo $cross;
        $pg_close($conn);
        ?>


</body>

</html>