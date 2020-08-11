 <?php
  $disp_enc = "UTF-8";

  $conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");

  $cross1 = 'image/g_cross.jpeg';
  $cross2 = 'image/g_cross.jpeg';

  if(isset($_POST['send_1'])){
  $value = $_POST['button'];
  $selmenu = $_POST['soldmenu'];
  $sql = "update menu set sold=$value where menu='$selmenu'";
  $res = pg_query($conn, $sql);
  $sql2 = "select sold from menu where menu='$selmenu'";
  $res2 = pg_query($conn, $sql2) or die("error3");
  $x = pg_fetch_array($res2, 0, PGSQL_ASSOC);
  
  if ($x["sold"] == 't') {
    $cross1 = 'image/r_cross.jpeg';
  } else {
    $cross1 = 'image/g_cross.jpeg';
  }
}
  if(isset($_POST['send_2'])){
  $value = $_POST['button'];
  $selmenu = $_POST['soldmenu'];
  $sql = "update menu set sold=$value where menu='$selmenu'";
  $res = pg_query($conn, $sql);
  $sql2 = "select sold from menu where menu='$selmenu'";
  $res2 = pg_query($conn, $sql2) or die("error3");
  $x = pg_fetch_array($res2, 0, PGSQL_ASSOC);
  
  if ($x["sold"] == 't') {
    $cross2 = 'image/r_cross.jpeg';
  } else {
    $cross2 = 'image/g_cross.jpeg';
  }
}
  ?>
