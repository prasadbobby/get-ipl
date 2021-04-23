<?php require_once('Sessions.php') ?>
<?php require_once('functions.php') ?>
<?php
$_SESSION['user_id'] = null;
session_destroy();
Redirect_To('../admin.php');

?>