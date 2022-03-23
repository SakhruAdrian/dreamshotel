<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrasi</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="gambar/logo3.png">
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div class=login>
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>

		<h2>Buat Akun</h2>
		<form action="regisproses.php" method="post">
		<div class="box-login">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="username" name="nama" required="required">
		</div>
		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="text" placeholder="email" name="email" required="required">
		</div>
		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="password" name="password" required="required">
		</div>

		<button type="submit" class="btn-login">Register</button>

		<div class="bottom">
			<a href="index.php">Sudah punya akun?</a>
		</div>
		</form>
	</div>
</body>
</html>