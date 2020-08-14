<?php
$disp_enc="UTF-8";

$conn = pg_connect("host=localhost dbname=team3db user=team3 password=oshkmr1435") or die("error1");

if(isset($_POST['send1'])){
$value = $_POST['button'];
$time = date('Y-m-d H:i:s');
$sql = "insert into congestion values($value,'$time')";
$res = pg_query($conn,$sql);
}

?>
