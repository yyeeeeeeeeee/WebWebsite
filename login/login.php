<?php

	include("connect.php");
	include("functions.php");

	$user_data = check_login($conn);

	// Retreive user data for login
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Login') {

		//something was posted
		$email = $_POST['emailLogin'];
		$password = $_POST['passwordLogin'];

		if(!empty($email) && !empty($password) && !is_numeric($email)) {

			//read from database
			$query = "select * from users where email = '$email' limit 1";

			$result = mysqli_query($conn, $query);

			if ($result) {
				if ($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);

					if ($user_data['password'] === $password) {
					  $_SESSION['user_id'] = $user_data['user_id'];
						if (!(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')) {
							header('Location: ' . $_SERVER['PHP_SELF']);
							exit;
						}
					}
				}
			}
		} else {
			echo "Please enter some valid information!";
		}
	}

	// Insert new user data into database
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Signup') {

		//something was posted
		$email = $_POST['emailSignup'];
		$password = $_POST['passwordSignup'];
		$repassword = $_POST['repasswordSignup'];

		if (!empty($email) && !empty($password)  && !empty($repassword) && !is_numeric($email)) {

			//save to database
			$user_id =random_num(12);
			$query = "insert into users (user_id, email, password) values ('$user_id', '$email', '$password')";

			if ($password == $repassword) {
				mysqli_query($conn, $query);
			}

			header('Location: ' . $_SERVER['PHP_SELF']);
			exit;

		} else {
			echo "Please enter some valid information!";
		}
	}
?>

<section class="home">
		<div class="form_container">
			<i class="fa fa-times form_close"></i>
			<!-- Login Form -->
			<div class="form login_form">
				<form action="/test/index.php" id="loginForm" method="POST" onsubmit="return validateAccLoginForm(event)">
					<h2>Login</h2>
					<div class="input_box">
						<input id="emailLogin" name="emailLogin" type="email" placeholder="Enter your email"/>
						<i class="fa fa-envelope email"></i>
						<div class="err" id="emailErrLogin"></div>
					</div>
					<div class="input_box">
						<input id="passwordLogin" name="passwordLogin" type="password" placeholder="Enter your password"/>
						<i class="fa fa-lock password"></i>
						<i class="fa fa-eye-slash pw_hide"></i>
						<div class="err" id="pswErrLogin"></div>
					</div>

					<div class="option_field">
						<span class="checkboxRemember">
							<input type="checkbox" id="checkRemember">
							<label for="checkRemember">Remember me</label>
						</span>
						<a href="#" class="forgot_pw">Forget password?</a>

					</div>

					<button class="button" id="loginFormSubmit" type="submit" name="submit" value="Login">Log In</button>

					<div class="login_signup">
						Don't have an account?
						<a href="#" id="signup">Signup</a>
					</div>
				</form>
			</div>

			<!-- SignUp Form -->
			<div class="form signup_form">
				<form action="/test/index.php" id="signupForm" method="POST" onsubmit="return validateAccSignupForm(event)">
					<h2>Signup</h2>
					<div class="input_box">
						<input id="emailSignup" name="emailSignup" type="email" placeholder="Enter your email"/>
						<i class="fa fa-envelope email"></i>
						<div class="err" id="emailErrSignup"></div>
					</div>
					<div class="input_box">
						<input id="passwordSignup"  name="passwordSignup" type="password" placeholder="Create password"/>
						<i class="fa fa-lock password"></i>
						<i class="fa fa-eye-slash pw_hide"></i>
						<div class="err" id="pswErrSignup"></div>
					</div>
					<div class="input_box">
						<input id="repasswordSignup" name="repasswordSignup" type="password" placeholder="Confirm password"/>
						<i class="fa fa-lock password"></i>
						<i class="fa fa-eye-slash pw_hide"></i>
						<div class="err" id="repswErrSignup"></div>
					</div>

					<button class="button" id="signupFormSubmit" type="submit" name="submit" value="Signup">Sign Up</button>

					<div class="login_signup">
						Already have an account?
						<a href="#" id="login">Login</a>
					</div>
				</form>
			</div>
		</div>
	</section>