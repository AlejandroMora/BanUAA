<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel="stylesheet" href="css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php 
        	require 'conexion.php';
        	$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `users` WHERE user='{$_SESSION['user']}'"));
        	$employee = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `users` WHERE user='{$user['employee']}'"));
        	$date = date('Y-m-d');
        	if(isset($_POST["loan"]) && ($employee["amount"] > $_POST["amount"])){
        		mysqli_query($link, "UPDATE `USERS` SET amount = (amount-{$_POST['amount']}) WHERE user='{$user['employee']}'");
        		mysqli_query($link, "UPDATE `USERS` SET amount = (amount+{$_POST['amount']}) WHERE user='{$user['user']}'");
        		mysqli_query($link, "INSERT INTO `{$user['account']}` (date, description, amount, total) VALUES ('{$date}', 'Loan effectued', {$_POST['amount']}, {$user['amount']})");
        	}
        ?>
		<script>
            $(document).ready(function(){
                $('#table tbody tr').click(function(){
                    window.location = $(this).attr('href');
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
    		<div id="image" style="text-align: center;">
    			<a href="."><img src="logo.png"></a>
    		</div>
    		<div id="right-ul">
      			<ul>
        			<li><a href="#home" style="font-size: 1.5em;"><img src="data:image/png;base64,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"/>Home</a></li>
        			<li><a href="#trans" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEE0lEQVRYR8VXXW7TQBCeSdo+5waYNyRIZU5AjpAjRKKVeEx6gpygziNSi8gRwg3SG5gWJB7DCfBzk3j5vrHXdZ0fNlDAUuTYnt35duabb3ZV/vOl+/yfd5NBrs61nCyadk6kI6qxc/JZnWTacn3aONFMxXX83d452ML+aKnD999Gj+baC+DsNBljdKQqmQfAiTFh2soLUE6lw59/lpbE7aXMV0cSEVjeksi+4X0ukn24G83qi9kfgdPLict1xsG6ljnvcG6OOXnlnNHglUtKh/477fkOC4hoi8hEV7cXw3AA3cvUOR1WE9ApAPCZq7HQ438VHToBUFs1QJkNvwOEAVCJr29H42AARQrkDQakCFXEvOOe2d07du77Fn5YylT0B0B8ouOje5muT9zwoAj4id+9SCLmlM+4p9N0VHGi6bz+zAWQLwYGgMHn/tXdRS84AvsmD/n2tpv0uXqkYF6AcON/CuDsVdKz8lzrtOAFUhASAYa8Wa8hK27aEICRr6yYIADnL5NYWm7aXmr/T0FYBHzFkLTOxdd3F4O9HDjrXs4gNtOWul6TsYdGgQAeacevypCsRbgWZf3GcJihbieHOvb2RQTcOBe1OfbqAPO+PnZTCA9BmMpB7gartg5Dy24bB0hCRHRhc4rr7UzBefdybs4pm775tMRqtqleuyJi/Gm7AfsF8007SyeEq1BQN3aqc+svAlkvBE6EXY/o0FmmNjk1nIMxiFxo3+sklJDg0BQKOK/kFytvryVbnUjf+kJZlq4tPfaGEsCD5hsAajcM8M+aDNtrKCFNNeGMIS/nYZvO2CPMadkrMOeA7VlNrcTyNDPVosNa/zcuIJwwHgdH4TQZ0jki2aMKWlrhA5GZkeBMCZzEXJRayPKCpUBoaH2OLQXMH9NDLjRqeBcXirTWOAUAbEarYzf2Y/yCCgBlznwbxaqjKhJACm6goYBcIOn1l9F8n2P/zYtQkVFry9xLpPXVmw8izVU+AsTzKlxF54KMYjNSu/BuAC23NIVclahhR8TFHS8lRRQm9a2ZFvUv1GyTSrASWyydEwCU41npiGlBKrCvu5fXwVwolLBHTnGbRj8+934BG1syn5JtohGy6qYNo+DJR7Kz1Otp3ACAlKSQzjGNDyHdLnBWliCfVdmWOXcCeIpmVBESROf/baW8FQA4gMrY3MH+Tgo4ZhAnHRAwuvo6su3ZI2I3XzAFBABCsnHYYeNvXpsR4FkA3csqAgcSO+GwJKmPD9S9qTWUBaolpU1zuxUCfGsVkKllG2X5mY77Ew7vpvO4/Har2KLbfi9YI3aWoUkoV6tyU57xFqUxG5M1GDspeRDsG/Z8mEjtBoCeXnXC8lyYOwhT2ageBuIAikOnTxPfh+4b9pIwJG9PafMTjCNp7radHt4AAAAASUVORK5CYII="/>Trans.</a></li>
        			<li><a href="#hist" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACrElEQVRYR81XzW7aQBCesaOqR/cJ6t4qtUb0CeJHoG9gKSD1Vox6r3uvWI6VIIrzBKVP0OQJoNBKvSV5A3qrRPB0ZmHBcg0Ywk/2AFqz3vnmm2++XRCOPPDI8eFxAAjKyon74egYbGgGaqVmCwj77WEYHxrEDIC6IaIfnWGjcggAZ56qnA/DrsTC6mvlowXfZTK24Nm+S6HZnmDc/hX2NYDaK1UGmwIgKNtjDL78Dm/3xUI2uAYgH8ICWOB3BmF0yOAHA1Dz1AUHu84T+d4ZWBV87wysC74AUFK69rvUQJHgDwbAqn4/tvAy27pFgz8IgJiJhfCVAD6lmdskeCEAVU8pbtY7DtJKt6gGAFRnACPjoHl9vq6tp12wRAP8/CMviAiIATTc9GZVrxnf21i3J+ALEEA8TQjeGotdF9j8ngtATseTCcUI2CUEhxc7OIGusU9t3wiu9LU4KVkU8dxni/XNmo0A1LzmFSF2heZ58AQj2cwc1ZIxUx3IxkJ1e9CoGxft/Ayv0gdM0eBzDWgAhBESjMCi1tjGilG2ZChAZnZd1msS6JtMDcBt7xTT45gB8LFwA0h/TGYmi3cvlSsHlHzfP4EevzBqD8IX2SwFoDCxSfYLBkqqx2q+zCo9TbEpDT8T1etSaPAzhrZmgPs2IKQIEgzyMshubBgxAHZWAtFAHgCToQmYpdrMs+vySiFgn/4FJ33nmGtgGYBswLM3n5+f9z7c5Wlk3WXG3L6IgLVCLS7lt6kPzExFlM+CPF0pJIQy3570dUoPniesC4vQZ8+41Y8IXNaUm9pnev0SrwB+3wyia2S3qyNRhX2AUf0/EMghwPwreyKZLMa6LhC9MeALcVbkkouRzZ1wl0fxMgZ1K5+AmwaqAWzbQitLVfDHx/HXrCDYvSw7OgP/AAm1vhAZL7QeAAAAAElFTkSuQmCC"/>History</a></li>
        			<li><a href="./index.php?logout=Logout" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFPUlEQVRYR71XQXIaVxDtnkGq7IxOYLLLIrLQCYJPEPkERhW5KjsDFzC6gBh2qZJcGp1A+ATCJwBLSVV2Qicw2rkMTPu9nhnAWEgjp5ypQhrgz+/Xr1+//mi92imXErlWkbLgMpEx/gx575dKP781sVFgMjLV2vz7lRs164cTvfnr3+Zo3Zrlz/XVdqeOjfcAoGKmjfmXgVRx76Cw6dqAdwThM+Pjq1ahZ/Rg+yhmcISJESnCw2+OL1vdIujvWnPwa6emgXSOL5u7RfYAA0f9RDQKmK1aFfRXRfWJJdI8+bs5p7/IZlyTAbgAAOT18KWvnnUM15mYxqWpjKYb1gYbT1VtFyUZANDhY4B8H4BEnnutVSqTUHrhTGoqVvfSqO6YQYgFgXwfADCgiUbH/zSHB886DQQczULpbyRkQ+opkfoEIHoAuB8Pm+N15K4CoMjDifTXdUVaAjKQql5OLpvRn790KtNNqStbDi+UIwITLNWNs5JonWDXiVACi08uW5UcjJh9QAIDADlcBeIA0P3d8LNGyLpsgTVM5eLtZeuMG0CYdQSHT9gWGMB7ALlHoPSVjZnsHV814wUA2ceeFYB/g2DtaSDdnEUAOBonpk5zoFZLRAYBnAagEFjOJ4GecUNTa6voR2wABuRFLsw0oO3gc3SROov5BQYreO65mrbZYZZoL2OTXbbPPbwNEWhoomMgi9AJaEODIek1Pr9NTQj3iXSTAFmwHChBDgCaaWPN3iIqAMJJPWN3Tc+858EDX3eN18/Y83Vi8sIBIOGe1xqOuEw/grUBbIDs3vO7rCue5ui97wEA/yhKd0CsAwBd6COBrYcGt9URAI3BMNewrEPs9zIFAIrcAyg8sTLAcJOIWf6x3dkLxL0hYouWEht+y4DsgKFD6gfFG+N5t/A0iFVQxrZ3FEwOyYxKE23PNrGPSLwoASiaB4QWlhd/+knG3IDAVPV3ds3XJQAAXJgpMaISBJMY01fILL65nYZax9BDZyH77JqEWvNZAKQjnaFOoeyVPkvMgFjcyIZQGSU6p3KpD/j8xTIAZwhizQDcsO55ADzXp/KBLAa4LQcxsxjAaui6KlsyBZAquI8gMQNzAwpyY4IMAjcj1E0qicppgKG1DGAuvjU33uaGNqSG4KpgY0tmWst9JNWAnwE0ghnVvHRkA4GBFEOl1XWhmYF+ik1f3wcgNzEYGoFLOmsERgZHNXtPFpad9CsNEIC3TtoN5wB1CwHCmhWthuCBO+Jv9wHIzWcSyBYDgeGeixFJ3eWeCwawCEiHyLKadUIZtMMT5BQtBBe0KtTbmG3K9X0A3JgS+Vi0TLkP9EkZBeVeIHQsAKEJ4WyA4DAzBSO2u9oFd5U+ny9FxvhchLBZTrqe05bWHD2rVCyB0MFSs+F4XmrD/w4gdTJXPfuU92jFXt6K3wApCKDwiSjz8hp7lmXITskN1wHMaXFK4gFZOTdOi4iwMAAeGNCbHD7wfNY6HcU5EDLAFs2ARA9p4NEnIn8AQ8dPxRgSHEysOQ+qb6+avVTVPpTG8Pu+O+Hqb4clIdCG8bZamAE+y16l6cAe3+FQGlGQYKKM7GlMpydXrXcZUPqAi3BakqGP7vzKTIxv2c4E/5BLuunli/z3Qbp5049nad+3/ZQM7+YEdDMKZVA0u0cBcCZwIIX40IJ6jizOeDDJmZltGAaKDvC+8cMAEIR7ObIGGy99iql8IBs8NbMs1MAPBTAvSXYgzYD00CG3Prb9p1uxXz2PLsFdD6wwgsGCE+//CSAHlQOhIHnmL5JdkTVfAN/Yg55Ir24xAAAAAElFTkSuQmCC"/>Logout</a></li>
      			</ul>
    		</div>
  		</div>
    <!--------------------------------------HEADER------------------------------------------>
		<nav align="right" style="text-align: right;">
			<img id="search" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB00lEQVQ4T5VTQW6jQBDswvZqjzzBx0jZJDyBJ/AEDra0R/AL/ILA3iLZK/GD+Ak8AcWJtEeeQG5RbOitnhgHW1ak9GkYuouqrgIyqNmvLBRPQoj6quJDJFDgce/Jn6JKm2Fvf2bPR81v73MV1BysPREDqBUEgUxFNUSH5eolrc5BHMDsNluCA3Z2Qyp3KhyElLx6JaOpMdqPkJwzgdGGp5F22Ag0FqAev0vx9lOaSSuRika8q8hiSjbN6mmRDFnAqHeK0lFlrZ/SfNgQB5k/brWA8AOi8Wq7CC8D8OV6u4guLcokHu87KdfPqUlzhdnNvaGXpB+c0+ubCGC0/cNzM2TpJEiLQj1NyCC+xKCX6UFDk/t3m1LOJ4MNV5/T/+CrHdDiwgBG78gf/qXOMSdhfpPFB+sYFE0YnA2Dk5tdtsBJqxtVLF0P9zTeITkBMBRbEn2u6H/jLFXLAPjMM1BIJ9UhVAHtDIahOibRFuUCI2gMzKWR1hIkZKhqy4eFzYCMKVpElswjgDH5fZVN9z/ErPTtSxwqKaeY7MjI07wT5MxLQEbMjeajHaITgEsO9Hfz6ywwp1wqrSjr48f7RhmIjBh3RdWJNJ5J+ca8a3XR7iTpF/wffLL5YpgtBXIAAAAASUVORK5CYII="/>
            <input type="search" placeholder="Search..." />
			Welcome <b><?php echo $_SESSION["user"]; ?></b>
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div class="cont" id="cont">
  				<div id="home">
  					<h3>HOME</h3>
					              Today:<b><?php echo date('l jS \of F Y');?></b>
					<div>
						<!-- BLOQUE DE CAMBIO DE MONEDA, COMO ES MUY LARGO Y SE REPITE LO PUSE EN UNA FUNCION -->
						<?php currency(); ?>
						<!-- SOLICITAR PRESTAMO -->
						<div class="block" style="width: 59%; float: right;">
							<b>Loan request</b><br><br>
							<form method="POST">
								<input type="number" name="amount" placeholder="Amount" min="0" step="any" ><br><br>
								<input type="submit" name="loan" value="Request">
							</form>
						</div>
						<div class="block" style="width: 94%; float: left;">
							<b>Other info</b><br>
						</div>
					</div>
  				</div>
  				<!-- VISUALIZARA LOS CAMBIOS EN SU CUENTA -->
  				<div id="trans">
  					<h3>MY TRASNFERENCES</h3>
  					<table id="table">
						<thead height="50%"><tr>
								<th>Date</th>
						        <th>Description</th>
								<th>Amount</th>
						</tr></thead>
						<tbody>
							<?php 
								$query=mysqli_query($link, "SELECT `date`, `description`, `amount` FROM `{$user['account']}`");
                    			while($row = mysqli_fetch_assoc($query)) {
                    				echo "<tr href='?date=" . $row['date'] . "#visualizar'>
                    					<td>{$row['date']}</td>
                    					<td>{$row['description']}</td>
                    					<td>{$row['amount']}</td>
                    				</tr>";
                    			}
							?>
						</tbody>
					</table>
				</div>
				<!-- DESPLEGARÁ UNA GRAFICA DE LOS CAMBIOS EN LA CUENTA -->
  				<div id="hist">
					<link rel="stylesheet" href="http://factmint.io/stacked-area.css">
					<script async src="http://factmint.io/stacked-area.js"></script>
  					<h3>HISTORY</h3>
  					<div style="width: 80%;">
  					<table class="fm-stacked-area" data-fm-y-label="Amount" data-fm-date-format="YYYY-MM-DD" data-fm-value-prefix="$">
						<thead>
							<tr>
								<th>Date</th>
								<th>Transferences</th>
						        <th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $query=mysqli_query($link, "SELECT `date`, `amount`, `total` FROM `{$user['account']}`");
                    			while($row = mysqli_fetch_assoc($query)) { //ULTIMOS 10 
                    				echo "<tr>
                    					<td>{$row['date']}</td>
                    					<td>{$row['amount']}</td>
                    					<td>" . ($row['amount'] + $row['total']) . "</td>
                    				</tr>";
                    			}
							?>
    					</tbody>
  					</table>
  					</div>
  				</div>
  				<div id="visualizar">
  					<h3>FACTURE</h3>
  					<?php
  					$report = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `{$user['account']}` WHERE date='{$_GET['date']}'")); ?>
					<b style="float: right;"><?php echo "Date: " . date('Y-m-d') . "<br>Time:     " . date('H:i:s'); ?>
					<br><br>Branch office: On-line<br>
					Tel: (449) 910-8417<br>
					Email: services@banuaa.net
					</b>
					<h4>
						<br>Acount number: <b><?php echo str_pad($user['account'], 6, "0", STR_PAD_LEFT); ?></b>
						<br>Type: <b><?php echo $user['type']; ?></b><br>
						<br>Name: <b><?php echo $user['names'] . " " . $user['lnames']; ?></b>
						<br>Total: <b><?php echo $user['amount']; ?> USD</b><br>
					</h4>
					<table><thead>
							<tr>
								<th>Date</th>
								<th>Description</th>
						        <th>Amount</th>
						        <th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php 
                    			echo "<tr>
                    					<td>{$report['date']}</td>
                    					<td>{$report['description']}</td>
                    					<td>{$report['amount']}</td>
                    					<td>" . ($report['amount'] + $report['total']) . "</td>
                    				</tr>";
							?>
    					</tbody>
  					</table>
  				</div>
		</div>
    <!--------------------------------------FOOTER------------------------------------------>
    <?php footer(); ?>
    </body>
</html>