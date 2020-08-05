 <?php
  $disp_enc = "UTF-8";

  $conn = pg_connect("host=localhost dbname=team3db user=team3 password=1qazxsw23edc") or die("error1");
 
  if(isset($_POST['send'])){
  $value = $_POST['button'];
  $selmenu = $_POST['soldmenu'];
  }

  $sql = "update menu set sold=$value where menu='$selmenu'";
  $res = pg_query($conn, $sql);
  $sql2 = "select sold from menu where menu='$selmenu'";
  $res2 = pg_query($conn, $sql2) or die("error3");
  $x = pg_fetch_array($res2, 0, PGSQL_ASSOC);
  
  if ($x["sold"] == 't') {
    $cross = 'image/r_cross.jpeg';
  } else {
    $cross = 'image/g_cross.jpeg';
  }

?>
