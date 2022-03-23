<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="gambar/logo3.png">
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div class=login>
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>

		<h2>Login Form</h2>
		<form action="loginproses.php" method="post">
		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="text" placeholder="Email" name="email" required="required">
		</div>
		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" name="password">
		</div>

		<button type="submit" class="btn-login">Login</button>

		<div class="bottom">
			<a href="register.php">Register</a>
		</div>
		</form>
	</div>
</body>
</html>