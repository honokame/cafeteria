<?php
$disp_enc="UTF-8";

$conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");

if(isset($_POST['send'])){
$value = $_POST['button'];
$time = date('Y-m-d H:i:s');
}

$sql = "insert into congestion values($value,'$time')";
$res = pg_query($conn,$sql);
?>
