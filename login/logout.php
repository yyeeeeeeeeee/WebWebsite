<?php
	session_start();

	if (isset($_SEESION['user_id'])) {
		unset($_SESSION['user_id']);
		session_destroy();
	}

	header("Location: /test/index.php");

	die;
?>
