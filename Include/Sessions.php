<?php
session_start();

function ClientConfirmLogin () {
	$login = false;
	if ( isset($_SESSION['user_idd'])) {
		$login = true;
	}

	if ($login === false) {
		$_SESSION['errorMessage'] = 'Login Required';
		Redirect_To('login.php?Error');
	}
}

function ConfirmLogin () {
	$login = false;
	if ( isset($_SESSION['user_id'])) {
		$login = true;
	}

	if ($login === false) {
		Redirect_To('admin.php?AError');
	}
}
?>