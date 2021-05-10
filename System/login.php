<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image:url(Images/login.jpg); width:100%; background-size: cover;">

	<h1 id="welcomeDiv" text-align="center" style=" margin:10px;padding: 10px 0px 10px 0px; text-align: center; background-color:red; color: white;border: 1.5px solid white;">
		Welcome to Car Service Shop Login Page
	</h1>
	<div class="header" style="width: 60%;  background-color:red; ">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php" style="width: 60%; ">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" style="color:white;background-color:blue;  padding: 10px 15px 10px 15px;">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>

</html>