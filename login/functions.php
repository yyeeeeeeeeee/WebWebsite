<?php

    // Start session only if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

if (!function_exists('check_login')) {
	function check_login($conn) {
		if(isset($_SESSION['user_id'])) {
	
			$id = $_SESSION['user_id'];
			$query = "select * from users where user_id = '$id' limit 1";
	
			$result = mysqli_query($conn,$query);
			if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}
		
	}
}
if (!function_exists('logout')) {
	function logout() {
		if (isset($_SEESION['user_id'])) {
			unset($_SESSION['user_id']);
			session_destroy();
			header("Location: /test/index.php");
			exit;
		}
	}
}

if (!function_exists('random_num')) {
	function random_num($length) {
		$text = "";
		if ($length < 5) {
			$length = 5;
		}
	
		$len = rand(4, $length);
	
		for ($i = 0; $i < $len; $i++) {
			$text .= rand(0, 9);
		}
	
		return $text;
	}
}
