<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php 
        	require 'conexion.php';
			if(isset($_POST["user"]) && isset($_POST["pass"])){
				if($row = mysqli_fetch_assoc(mysqli_query($link, "SELECT `user`, `type` FROM `users` WHERE user='{$_POST['user']}' AND pass='{$_POST['pass']}'"))){
					$_SESSION["user"] = $row["user"];
					header("Location: ./{$row['type']}.php");}
				elseif ($_POST["user"] != "" && $_POST["pass"] == "") {
					echo '<script language="javascript">alert("Login incorrect");</script>';}
			}
			if (isset($_GET["logout"])){
				session_unset();
				header("Location: ./index.php");
			}
		?>
    </head>
    <body>
  <!--------------------------------------HEADER------------------------------------------>
		<nav align="right" style="text-align: right;">
			<img id="search" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB00lEQVQ4T5VTQW6jQBDswvZqjzzBx0jZJDyBJ/AEDra0R/AL/ILA3iLZK/GD+Ak8AcWJtEeeQG5RbOitnhgHW1ak9GkYuouqrgIyqNmvLBRPQoj6quJDJFDgce/Jn6JKm2Fvf2bPR81v73MV1BysPREDqBUEgUxFNUSH5eolrc5BHMDsNluCA3Z2Qyp3KhyElLx6JaOpMdqPkJwzgdGGp5F22Ag0FqAev0vx9lOaSSuRika8q8hiSjbN6mmRDFnAqHeK0lFlrZ/SfNgQB5k/brWA8AOi8Wq7CC8D8OV6u4guLcokHu87KdfPqUlzhdnNvaGXpB+c0+ubCGC0/cNzM2TpJEiLQj1NyCC+xKCX6UFDk/t3m1LOJ4MNV5/T/+CrHdDiwgBG78gf/qXOMSdhfpPFB+sYFE0YnA2Dk5tdtsBJqxtVLF0P9zTeITkBMBRbEn2u6H/jLFXLAPjMM1BIJ9UhVAHtDIahOibRFuUCI2gMzKWR1hIkZKhqy4eFzYCMKVpElswjgDH5fZVN9z/ErPTtSxwqKaeY7MjI07wT5MxLQEbMjeajHaITgEsO9Hfz6ywwp1wqrSjr48f7RhmIjBh3RdWJNJ5J+ca8a3XR7iTpF/wffLL5YpgtBXIAAAAASUVORK5CYII="/>
            <input type="search" placeholder="Search..." />
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div class="cont" id="cont">
			<div>
	  			<div class="block" style="float: left; width: 22%;">
	  				<?php if(isset($_SESSION["user"])){ ?>
        				<h2 style='color: white;'>Hi <?php echo $_SESSION['user']; ?> !!</h2>
						<form method='GET'>
        					<input type='button' onclick='location.href="./<?php echo $row['type']; ?>.php"' value='Go site' style='padding: 3%;'/>
        					<input type='submit' name='logout' value='Logout' style='padding: 3%;'/>
						</form>
					<?php } else {?>				
						<h2 style="color: white;">Login</h2>
						<form method="POST">
							<input type="text" name="user" placeholder="Username"/>
							<br><input type="password" name="pass" placeholder="Password"/><br>
							<br><input type="submit" name="login" value="Login" style="padding: 3%;"/>
						</form>
        			<?php } ?>
				</div>
					<div id="slideshow" class="slide" style="float: right; width: 66%; height: 80%; padding: 0;">
						<div>
							<img src="http://paymentsafrika.com/live/wp-content/uploads/2015/11/Fotolia_47599510_Subscription_Monthly_M1.jpg">
						</div>
						<div>
							<img src="http://posercontent.com/sites/default/files/products/15/0628/0232/4-bank-vault.jpg">
						</div>
						<div>
							<img src="http://posercontent.com/sites/default/files/products/15/0628/0232/8-bank-vault.jpg">
						</div>
					</div>
					<script type="text/javascript">
						$("#slideshow > div:gt(0)").hide();
						setInterval(function() {
							$('#slideshow > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#slideshow');
						},  4000);
					</script>
				<div class="block" style="float: left; width: 22%;">
					<h1>Other info</h1>
				</div>
  			</div>
  		</div>
    <!--------------------------------------FOOTER------------------------------------------>
		<?php footer(); ?>
    </body>
</html>