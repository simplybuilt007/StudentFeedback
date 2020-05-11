<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
<SCRIPT type="text/javascript">
	window.onload = function(){
	window.history.forward();
	function noBack(){
		window.history.forward();
	}
}
</SCRIPT>
</head>

<body background="images/107688.jpg">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method = "post">
			<h1>Create Account</h1>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="emailid" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="check_login.php" method = "post">
			<h1>Sign in</h1>
			<input type="email" name="emailid" placeholder="Email" />
			<input type="password" name = "password" placeholder="Password" />
			<a href="forgot_password.php">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script type = "text/javascript" src = "js/login.js" ></script>