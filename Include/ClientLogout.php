<?php include('Sessions.php') ?>
<?php include('functions.php') ?>
<?php
$count = 0;
$id = $_SESSION['user_idd'];
$username = $_SESSION['user_name'];
$sqll = "UPDATE users SET count = '$count' WHERE username = '$username'  AND id = '$id'";
$ex = Query($sqll);
if($ex){
  $_SESSION['user_idd'] = null;
  $_SESSION['user_name'] = null;
  session_destroy();
  Redirect_To('../login.php');
  }

?>