<html>
<head><title>imagetest</title></head>
<body>

<?php
/*
$sv="radish6.knet";
$dbname="team3db";
$user="team3";
$pass="1qazxsw23edc";
*/

$disp_enc="UTF-8";

$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");

$sql = "select type,price,cal,alleval,image from menu where menu='カレーライス'";
$res = pg_query($conn,$sql) or die("error2");

for($i=0;$i<pg_numrows($res);$i++){
$row=pg_fetch_array($res,$i,PGSQL_ASSOC);
echo $row["image"];
}

pg_close($conn);
?>
<br>
<img src="<?=$row["image"]?>">
</body>
</html>
