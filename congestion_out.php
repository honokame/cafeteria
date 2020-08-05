<html>
<head><title>sold</title></head>
<body>
<?php
$disp_enc="UTF-8";
$time = date('Y-m-d H:m:s');
$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
$sql = "select input from congestion where '$time'-time<'10min'";
$res = pg_query($conn,$sql) or die("error3");
$x = pg_array($res,0);
$pg_close($conn);
?>


</body>
</html>
