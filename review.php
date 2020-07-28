<!DOCTYPE html>
  <html>
  <head>
    <meta charset = "utf-8" />
  </head>
  <body>
    <form action ="review.php" method ="POST">
      コメント<br />
      <textarea name = "comment" cols = "50" rows = "5"></textarea>
      <br />
      <input type = "submit" name = "send" value = "送信" />
    </form>
 
  <?php
  $display_enc = "UTF-8";
  
  // データベース接続設定
  $sv = "localhost";
  $name = "team3db";
  $user = "team3";
  $pass = "1qazxsw23edc";

  // データベースに接続
  $dbconn = pg_connect("host = $sv dbname = $name user = $user password = $pass") or die("接続エラー");
  //$res = pg_query($dbconn, $sql) or die("データ読み込みエラー")
  if(isset($_POST['send'])){
    $comment = $_POST["comment"];
    $sql = "INSERT INTO review(menu,eval,body,date) VALUES('$comment')";
    $res = pg_query($dbconn,$sql) or die("データ読み込みエラー");
  }
  

  ?>
  </body>
  </html>