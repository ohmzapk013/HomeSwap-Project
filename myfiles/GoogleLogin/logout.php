<?php
	require_once "config.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	if (isset($_SESSION['userID']) && isset($_SESSION['email'])) {
		unset($_SESSION['userID']);
		unset($_SESSION['email']);
		header('Location: ..\index.php');
		exit();
	}

	header('Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://shirba.mtacloud.co.il/index.php')

?>
