<html>
<head><title>sold</title></head>
<body>
<?php
$disp_enc="UTF-8";
$time = date('Y-m-d H:i:s');
$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
$sql = "select * from congestion where '$time'-time < interval '10minutes'";
$x = array();
$res = pg_query($conn,$sql) or die("error3");
for($i=0;$i<pg_numrows($res);$i++){
    $row = pg_fetch_array($res,$i,PGSQL_ASSOC);
    $x[$i]["input"] = $row["input"];
}

$ave = 0;   //0:ガラガラ、1:普通、2:混雑
$status = "level1.png";
for($i=0;$i<count($x);$i++){
    $ave += $x[$i]["input"];
    //echo $x[$i]["input"];
}
$ave /= count($x);

//判定
if($ave<0.5){
    $ave=0;
    $status="level1.png";
}else if($ave<1.5){
    $ave=1;
    $status="level2.png";
}else{
    $ave=2;
    $status="level3.png";
}

//echo $status;
//echo $ave;

?>
</body>
</html>
