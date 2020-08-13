 <?php
  $disp_enc = "UTF-8";

  $conn = pg_connect("host=localhost dbname=team3db user=team3 password=oshkmr1435") or die("error1");
  $image_t = 'urikire.png';
  $image_f = 'hanbaityu.png';

  if(isset($_POST['send2'])){
  $value = $_POST['button'];
  $selmenu = $_POST['soldmenu'];
  $sql = "update menu set sold=$value where menu='$selmenu'";
  $res = pg_query($conn, $sql);
  //$sql2 = "select sold from menu where menu='$selmenu'";
  //$res2 = pg_query($conn, $sql2) or die("error3");
  //$x = pg_fetch_array($res2, 0, PGSQL_ASSOC);
  
  if ($value == 'true') {
    $sql3 = "update menu set image='$image_t' where menu='$selmenu'";
    $res3 = pg_query($conn, $sql3);
  } 
  if ($value == 'false'){
    $sql4 = "update menu set image='$image_f' where menu='$selmenu'";
    $res4 = pg_query($conn, $sql4);
  }
}
?>
