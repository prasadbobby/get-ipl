<?php
require_once('Database.php');

function Redirect_To ($location) {
	header('location:' . $location);
	exit;
}  

function Query ($query) {
	global $con;

	try {
		$exec = mysqli_query($con,$query) or die(mysqli_error($con));
		if($exec) {
			return $exec;
		}
	
	}catch (Exception $e) {
		echo $e->getMessage();
	}

	return false;
}

function LoginAttempt($username, $password) {
	$query = "SELECT * FROM admins WHERE username = '$username'  AND password = '$password'";
	$exec = Query($query);
	if ($admin = mysqli_fetch_assoc($exec)) {
		return $admin;
	}else {
		return null;
	}

}
function ClientLoginAttempt($username, $password) {
	$query = "SELECT * FROM users WHERE username = '$username'  AND password = '$password'";
	$exec = Query($query);
	if ($client = mysqli_fetch_assoc($exec)) {
		return $client;
	}else {
		return null;
	}

}

?>