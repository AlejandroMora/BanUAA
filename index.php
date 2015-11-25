<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel="stylesheet" href="css.css">
		<?php require 'conexion.php'; ?>
		<script type="text/javascript">
			$( "#hamburger" ).click(function() {
				$( "aside" ).slideToggle( "slow", function() {
					$( "#hamburger" ).hide();
					$( "aside" ).show();
				});
			});
		</script>
    </head>
    <body>
    <!--------------------------------------ASIDE------------------------------------------>
		<a id="wrapper" class="ancre"></a>
    	<a id="close" class="ancre"></a>
  		<a href="#wrapper" id="hamburger"><div></div></a>
		<a href="#close" id="close"></a>
		<div id="wrapper">
    		<div id="image">
    		</div>
    		<div id="right-ul">
      			<ul>
        			<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABh0lEQVR4Xu3YWw7CIBAFULsyt6IrszvVYsTUCvNQHjNwmzT+kNJ7GCbY5TT5tUye/wQAVMDkAr23wGXzP2/3tdc69AQI4W+v4GsvhF4A+/Bx8aUId6ZaVJlUgwuVaSq8BsE1ABVeiuAWQBJeguASQBOeQ3AH8Et4CsEVwD/hcwhuAEqETyG4ACgZ/ohgHqBG+D1CeD51qc42qsGCg1DN8ILpn0NUmVSDmTewEL4bgJXwXQAshW8OYC18UwCL4ZsBWA3fBMBy+OoA1sMHgHW7xd8YNecAD+HjUUWMIAXwFF6FIAHwGF6MwAF4Di9CoABGCM8i5ABGCk8ipABGDJ9FOAKMHD6JsAeYIfwXQgSYKfwHQgCYMfwbIQBwX1nj4CF/ASBYVu8VQp52uaNw8AGAoEosD0EFUKuDLSCoXfQAAZLlIegB1noA13dKbzlzFQAApmGgAgp3VGwBNEFCgGtINf4McXOiB6AHlBVAE0QTRBPMC3AduexuNPg0ABhclKavhApoym1wsgcxr2He2jM9SwAAAABJRU5ErkJggg=="/>Home</a></li>
        			<li>Products</li>
        			<li>Services</li>
        			<li>Hosting</li>
        			<li>Contact Us</li>
      			</ul>
    		</div>
  		</div>
    <!--------------------------------------HEADER------------------------------------------>
		<nav align="right">
            <input type="search" id="search" placeholder="Buscar..." /> Bienvenido(a) <b> </b>
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div id="contenu">
  			<main>
  			</main>
		</div>
    <!--------------------------------------FOOTER------------------------------------------>
		<footer>
			<div class="">
	        	<h2>Explore</h2>
	            <ul>
	            	<li><a href="">About Us</a></li>
	            	<li><a href="">Institute</a></li>
	            	<li><a href="">Site Map</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Related Sites</h2>
	            <ul>
	            	<li><a href="">Chase</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Terms & Privacy</h2>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Connect With Us</h2>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            	<li><a href="">Terms & Conditions</a></li>
	            </ul>
			</div>
		</footer>
    </body>
</html>