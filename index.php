<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php header('Content-Type: text/html; charset=ISO-8859-1');
        	/*require 'conexion.php'*/; 
			session_start(); 

			if(isset($_POST["signup"])){
				if(mysqli_num_rows(mysqli_query($conn, "SELECT `user` FROM `users` WHERE user='{$_POST['user']}'"))>0){ $err="El usuario ya existe"; }
				elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["user"])){ $err="Tu usuario no puede contener espacios"; }
				elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]) || !preg_match("/^[a-zA-Z ]*$/",$_POST["last"])){ $err="Tanto tu nombre como tu apellido no pueden contener carácteres especiales"; }
				elseif($_POST["user"]=="" || $_POST["pass"]=="" || $_POST["pass2"]==""){ $err="Te faltan campos por completar"; }
				elseif($_POST["pass"]!=$_POST["pass2"]){ $err="Las contraseñas no coinciden"; }
				else{
					mysqli_query($conn, "INSERT INTO `users` (`user`, `pass`) VALUES ('{$_POST['user']}', '{$_POST['pass']}')");
					mysqli_query($conn, "CREATE TABLE {$_POST["user"]} (`inf` VARCHAR(40), `ind` VARCHAR(19), `ins` VARCHAR(60), `int` TINYTEXT, `inm` TEXT, `outf` VARCHAR(40), `outd` VARCHAR(19), `outs` VARCHAR(60), `outt` TINYTEXT, `outm` TEXT, `delf` VARCHAR(40), `deld` VARCHAR(19), `dels` VARCHAR(60), `delt` TINYTEXT, `delm` TEXT)");
					$err="";
				}
			}
			?>		
		<script>
            $(document).ready(function(){
            	  $('#f2').click(function(){
            	    $('#login').slideUp();
            	    $('#signup').slideDown();
            	    $(this).addClass('clicked');
            	    $("#f1").removeClass('clicked');
            	    $(this).preventDefault();
            	  });
            	  $('#f1').click(function(){
            	    $('#signup').slideUp();
            	    $('#login').slideDown();
            	    $(this).addClass('clicked');
            	    $("#f2").removeClass('clicked');
            	    $(this).preventDefault();
            	  });
            	});
        </script>
    </head>
    <body>
  <!--------------------------------------HEADER------------------------------------------>
		<nav align="right" style="text-align: right;">
            <input style="font-size: 15px; border-radius: 4px;" type="search" id="search" placeholder="Search..." /> Welcome <b>Me</b>
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div class="cont">
  			<div id="aside">
				<div class="block">
					<h3> Login</h3>
					<form method="POST">
						<input type="text" name="user" placeholder="Username"/><br>
						<br> <input type="password" name="pass" placeholder="Password"/><br>
						<br><input type="submit" name="login" value="Login" style="padding: 3%;"/>
						</form>
					</div>
				</div>
  			</div>
  			<div id="notice">
  				<h1>Hola mundo</h1>
  			</div>
  		</div>
    <!--------------------------------------FOOTER------------------------------------------>
		<footer>
			<div class="">
	        	<label>Explore</label>
	            <ul>
	            	<li><a href="">About Us</a></li>
	            	<li><a href="">Institute</a></li>
	            	<li><a href="">Site Map</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Rel. Sites</label>
	            <ul>
	            	<li><a href="">Chase</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Terms & Priv.</label>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Contact Us</label>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            	<li><a href="">Terms & Conditions</a></li>
	            </ul>
			</div>
		</footer>
    </body>
</html>