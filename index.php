<HTML>
	<head>
		<title>BanUAA</title>
		<style type="text/css" src="css.css"></style>
		<?php require 'conexion.php'; ?>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Hosting</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
		<form method="post">
			<p>User<input type="text" placeholder=User  name="user"></p>
			<p>Password<input type="password" placeholder=Pass name="pass"></p>
		</form>
	</body>
</HTML>