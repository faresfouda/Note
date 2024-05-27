<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
	<label>Username</label>
	<input type="text" name="username">
	</div>
	<div class="input-group">
	<label>Email</label>
	<input type="text" name="email">
	</div>
	<div class="input-group">
	<label>Password</label>
	<input type="text" name="password_1">
	</div>
	<div class="input-group">
	<label>Confirm Password</label>
	<input type="text" name="passwor_2">
	</div>
	<div class="input-group">
	<button type="submit" name="register" class="btn">Register</button>
	<p>
		Already a member? <a href="login.php">sign in</a>
	</p>
	</div>
</form>
</body>
</html>