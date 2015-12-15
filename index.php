<!DOCTYPE html>
<html>
    <head>
    	<!-- EN EL HEADER SE ENCUENTRA LO NECESARIO, CSS, JQUERY, LA CONEXI�N A LA BASE DE DATOS -->
        <title>Inicio</title>
        <link rel="stylesheet" href="css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php 
        	require 'conexion.php';
        	//USO CON FINES DE TESTEO
        	$query =  mysqli_query($link, "SELECT * FROM `USERS`");
		    while ($resp = mysqli_fetch_assoc($query)){
		        echo "<br> {$resp['account']} {$resp['user']} {$resp['pass']} {$resp['amount']} {$resp['type']}";
		    }
			if(isset($_POST["user"]) && isset($_POST["pass"])){ //LOGIN
				if($row = mysqli_fetch_assoc(mysqli_query($link, "SELECT `user`, `type` FROM `users` WHERE user='{$_POST['user']}' AND pass='{$_POST['pass']}'"))){
					$_SESSION["user"] = $row["user"];
					header("Location: ./{$row['type']}.php");}
				elseif ($_POST["user"] != "" && $_POST["pass"] == "") {
					echo '<script language="javascript">alert("Login incorrect");</script>';}
			}
			if (isset($_GET["logout"])){ //LOGOUT
				session_unset();
				header("Location: ./index.php");
			}
			//$ROW LA OCUPO PARA FINES PRACTICOS
			$row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `users` WHERE user='{$_SESSION['user']}'"));
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
				<!-- PAGINA DE INICIO -->
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
					<!-- IMAGENES -->
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
					<!-- SCRIPT PARA LA TRANSICION DE LAS IMAGENES -->
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
  			<div id="aboutus">
				<h2>Acerca de Nosotros<br></h2>
					<h4>Unete a una banca donde puedes tener total libertad para manejar tu dinero.
						Sin comisiones, sin filas, sin hacer tramites largos, sin ir a perder tu tiempo 
						a una sucursal y con mas beneficios.Este banco esta interesado en ti.</h4>
				<h2>Preguntas frecuentes</h2>
					<h3>1.1. �En qu� consiste la innovaci�n de BanUaa?</h3>
					<h4>En BanUaa, en cuesti�n de minutos, podr�s abrir una cuenta en l�nea, a trav�s de nuestra p�gina WEB, sin pisar nunca una sucursal. Tu cuenta bancaria, una vez autorizada, te permitir� realizar tus operaciones y administrar tu patrimonio de manera �gil, sencilla y segura.</h4>
					<h3>1.2. �C�mo pueden operar sin sucursales?</h3>
					<h4>En BanUaa la sucursal eres t�! Gracias a la novedosa plataforma tecnol�gica que desarrollamos, donde quiera que te encuentres, los 365 d�as del a�o, podr�s hacer banca de forma �gil y segura a cualquier hora, a trav�s de nuestros canales digitales. Podr�s consultar saldos y movimientos de tu cuenta BanUaa, realizar transferencias a cuentas de terceros en BanUaa y en otros bancos, pagar servicios y, todo ello, sin hacer largas filas.</h4>
					<h3>2.1. Cr�dito Empresarial</h3>
					<h4>En BanUaa reconocemos que los peque�os y medianos empresarios deben dedicar su tiempo a atender y hacer crecer sus negocios, evitando largos y complicados tr�mites para obtener un financiamiento. Somos el primer banco en M�xico que ofrece la posibilidad de solicitar un cr�dito en l�nea para tu empresa y en cuesti�n de minutos, saber si eres candidato a un cr�dito. Para mayor informaci�n visita la secci�n de �Cr�dito PyME�.</h4>
					<h3>3.1 Pagar�s con Rendimiento Liquidable al Vencimiento </h3>
					<h4>El Pagar� es un instrumento de inversi�n, que podr�s contratar al plazo de tu elecci�n, y te proporciona una atractiva  tasa de inter�s misma que conocer�s al momento de la apertura de tu inversi�n.  Lo �nico que necesitas es contar con una Cuenta BanUaa y un monto m�nimo de inversi�n de $1,000 pesos m.n.</h4>
					<h3>3.2	 �Cu�l es el monto m�nimo de apertura para una inversi�n?</h3>
					<h4>El monto m�nimo para contratar un pagar� es de 7d�as y  puedes contratar a partir de $1,000 pesos.</h4>
					<h3>4.1. �C�mo abro mi cuenta?</h3>
					<h4>�Es muy sencillo! Entra a la secci�n de �Crea tu cuenta bancaria� y  completa el formulario. En pocos minutos, con s�lo dar tu nombre completo, g�nero, fecha y lugar de nacimiento y direcci�n, tendr�s acceso a una cuenta bancaria con un l�mite de dep�sitos mensuales de 3,000 UDIs equivalente a un monto aproximada de $15,000 pesos m.n. quince mil pesos. A trav�s del correo electr�nico que registres, recibir�s la informaci�n referente a tu cuenta y el detalle para empezar a operar la banca electr�nica. Si tus necesidades financieras demandan una cuenta sin l�mite de dep�sitos mensuales, completa los datos adicionales que la regulaci�n mexicana solicita, en la secci�n �Deposita sin L�mites� de el formulario de creaci�n de cuenta y espera la visita de uno de nuestros promotores, qui�n realizar� la visita ocular. *Servici� �nicamente disponible para clientes en el Aguascalientes.</h4>
					<h3>4.5. �Qu� incluye mi Cuenta BanUaa?</h3>
					<h4>Tu cuenta incluye una tarjeta de d�bito Mastercard�, un token virtual o f�sico y acceso a trav�s de tu Banca por Internet.Para conocer m�s sobre los beneficios de tu cuenta visita la secci�n �Cuenta BanUaa en nuestro portal. En el formulario de apertura de cuenta, tendr�s que elegir si deseas un token f�sico o un token virtual.</h4>
  			</div>
  		</div>
    <!--------------------------------------FOOTER------------------------------------------>
    	<!-- LO METI EN UNA FUNCION Y QUE SE IMPRIMIERA EN TODAS LAS PAGINAS, A FIN DE CUENTAS ES LA MISMA
    	INFORMACION, Y YA NO TENDR�A QUE VER TODO EL C�DIGO -->
		<?php footer(); ?>
    </body>
</html>