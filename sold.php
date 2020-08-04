<html>
<head><title>sold</title></head>
<body>
  <form>
      売り切れ情報を入力してください<br>
      <input type="radio" name="button" value=false checked="checked">販売中
      <br>
      <input type="radio" name="button" value=true>売り切れ
      <br>
      <input type="submit" value="送信">
  </form>

<?php
$disp_enc="UTF-8";
$selmenu="カレーライス";
$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
$value = $_GET['button'];
$sql = "update menu set sold=$value where menu='$selmenu'";
$res = pg_query($conn,$sql) or die("error2");
$sql2 = "select sold from menu where menu='$selmenu'";
$res2 = pg_query($conn,$sql2) or die("error3");
$x = pg_fetch_array($res2,0,PGSQL_ASSOC);
echo $x["sold"];
if($x["sold"]=='t'){
  $cross='image/r_cross.jpeg';
}else{
  $cross='image/g_cross.jpeg';
}
echo $cross;
$pg_close($conn);
?>


</body>
</html>