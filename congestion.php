<html>
<head><title>sold</title></head>
<body>
  <form>
      混雑情報を入力してください<br>
      <input type="radio" name="button" value=0>ガラガラ
      <br>
      <input type="radio" name="button" value=1 checked="checked">普通
      <br>
      <input type="radio" name="button" value=2>混雑
      <br>
      <input type="submit" value="送信">
  </form>

<?php
$disp_enc="UTF-8";
$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
$value = $_GET['button'];
$time = date('Y-m-d H:i:s');
echo $time;
$sql = "insert into congestion values($value,'$time')";
$res = pg_query($conn,$sql);
$pg_close($conn);
?>


</body>
</html>
