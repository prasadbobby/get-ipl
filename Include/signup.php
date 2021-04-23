<?php
require_once('functions.php');
include('Sessions.php');
if(isset($_POST['save']))
{
$uname = mysqli_real_escape_string($con,$_POST['username']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sql = "SELECT * FROM users where username='$uname' or email='$email'";
$exec = Query($sql);
if (mysqli_num_rows($exec)>0)
{
      header("Location: ../login.php?RError");
}
else{
      date_default_timezone_set("Asia/Calcutta");
      $time = time();
      $dateTime = strftime('%Y-%m-%d %H:%M:%S ',$time);
      $count = 0;
      $sql = "INSERT INTO users (date_time, username,email,password,count) VALUES('$dateTime', '$uname','$email','$password','$count')";
      $exec = Query($sql);
      if ($exec) {
            $foundAccount = ClientLoginAttempt($uname, $password);
            if ($foundAccount) {
                  $_SESSION['user_idd'] = $foundAccount['id'];
                  $_SESSION['user_name'] = $foundAccount['username'];
            }
            mysqli_close($con);
            Redirect_To("../index.php?reg");
      }else {
            Redirect_To("../login.php?fail");
      }
}
}

if(isset($_POST['send'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $queries = mysqli_real_escape_string($con,$_POST['queries']);
      $foundAccount = ClientLoginAttempt($username, $password);
      if ($foundAccount) {
            $sql = "INSERT INTO query (name,email,comment) VALUES('$username','$email','$queries')";
            $exec = Query($sql);
            Redirect_To('../login.php?send');
      }
      else{
            Redirect_To('../login.php?invalid');
      }
}

if(isset($_POST['login'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $foundAccount = ClientLoginAttempt($username, $password);
      if ($foundAccount) {
            $count = 0;
            $query = "SELECT * FROM users WHERE username = '$username'  AND password = '$password' AND count = '$count'";
            $exec = Query($query);
            if(mysqli_num_rows($exec) > 0){
                  $_SESSION['user_idd'] = $foundAccount['id'];
                  $_SESSION['user_name'] = $foundAccount['username'];
                  Redirect_To('../index.php');
            }else{
                  Redirect_To('../login.php?again');
            }
      }
      else{
            Redirect_To('../login.php?invalid');
      }
}
if(isset($_POST['adminlogin'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $foundAccount = LoginAttempt($username, $password);
      if ($foundAccount) {
            $_SESSION['user_id'] = $foundAccount['id'];
            $_SESSION['user'] = $foundAccount['username'];
            Redirect_To('../dashboard.php?success');
      }
      else{
            Redirect_To('../admin.php?invalid');
      }
}
if(isset($_GET['qid'])){
      $qid = $_GET['qid'];
      $sql="DELETE FROM query where id = $qid";
      $exec = Query($sql);
      if($exec){
            Redirect_To('../query.php?done');  
      }
}
else{
      Redirect_To('../login.php');
}
?>
