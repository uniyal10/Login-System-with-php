<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<a id="logo" href="#">
				<img src="./img/logo.jpg">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">About me</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div id="form">
				<form action="./includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/E-mail...">
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>
				<form action="./includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</nav>
	</header>

</body>
</html>