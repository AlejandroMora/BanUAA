<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php header('Content-Type: text/html; charset=ISO-8859-1');
        	/*require 'conexion.php';*/
        	session_start();
        	//$_SESSION["user"]=$_POST["user"];
        ?>
		<script>
            $(document).ready(function(){
                $('table tbody tr').click(function(){
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
        			<li><a href="#" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFPUlEQVRYR71XQXIaVxDtnkGq7IxOYLLLIrLQCYJPEPkERhW5KjsDFzC6gBh2qZJcGp1A+ATCJwBLSVV2Qicw2rkMTPu9nhnAWEgjp5ypQhrgz+/Xr1+//mi92imXErlWkbLgMpEx/gx575dKP781sVFgMjLV2vz7lRs164cTvfnr3+Zo3Zrlz/XVdqeOjfcAoGKmjfmXgVRx76Cw6dqAdwThM+Pjq1ahZ/Rg+yhmcISJESnCw2+OL1vdIujvWnPwa6emgXSOL5u7RfYAA0f9RDQKmK1aFfRXRfWJJdI8+bs5p7/IZlyTAbgAAOT18KWvnnUM15mYxqWpjKYb1gYbT1VtFyUZANDhY4B8H4BEnnutVSqTUHrhTGoqVvfSqO6YQYgFgXwfADCgiUbH/zSHB886DQQczULpbyRkQ+opkfoEIHoAuB8Pm+N15K4CoMjDifTXdUVaAjKQql5OLpvRn790KtNNqStbDi+UIwITLNWNs5JonWDXiVACi08uW5UcjJh9QAIDADlcBeIA0P3d8LNGyLpsgTVM5eLtZeuMG0CYdQSHT9gWGMB7ALlHoPSVjZnsHV814wUA2ceeFYB/g2DtaSDdnEUAOBonpk5zoFZLRAYBnAagEFjOJ4GecUNTa6voR2wABuRFLsw0oO3gc3SROov5BQYreO65mrbZYZZoL2OTXbbPPbwNEWhoomMgi9AJaEODIek1Pr9NTQj3iXSTAFmwHChBDgCaaWPN3iIqAMJJPWN3Tc+858EDX3eN18/Y83Vi8sIBIOGe1xqOuEw/grUBbIDs3vO7rCue5ui97wEA/yhKd0CsAwBd6COBrYcGt9URAI3BMNewrEPs9zIFAIrcAyg8sTLAcJOIWf6x3dkLxL0hYouWEht+y4DsgKFD6gfFG+N5t/A0iFVQxrZ3FEwOyYxKE23PNrGPSLwoASiaB4QWlhd/+knG3IDAVPV3ds3XJQAAXJgpMaISBJMY01fILL65nYZax9BDZyH77JqEWvNZAKQjnaFOoeyVPkvMgFjcyIZQGSU6p3KpD/j8xTIAZwhizQDcsO55ADzXp/KBLAa4LQcxsxjAaui6KlsyBZAquI8gMQNzAwpyY4IMAjcj1E0qicppgKG1DGAuvjU33uaGNqSG4KpgY0tmWst9JNWAnwE0ghnVvHRkA4GBFEOl1XWhmYF+ik1f3wcgNzEYGoFLOmsERgZHNXtPFpad9CsNEIC3TtoN5wB1CwHCmhWthuCBO+Jv9wHIzWcSyBYDgeGeixFJ3eWeCwawCEiHyLKadUIZtMMT5BQtBBe0KtTbmG3K9X0A3JgS+Vi0TLkP9EkZBeVeIHQsAKEJ4WyA4DAzBSO2u9oFd5U+ny9FxvhchLBZTrqe05bWHD2rVCyB0MFSs+F4XmrD/w4gdTJXPfuU92jFXt6K3wApCKDwiSjz8hp7lmXITskN1wHMaXFK4gFZOTdOi4iwMAAeGNCbHD7wfNY6HcU5EDLAFs2ARA9p4NEnIn8AQ8dPxRgSHEysOQ+qb6+avVTVPpTG8Pu+O+Hqb4clIdCG8bZamAE+y16l6cAe3+FQGlGQYKKM7GlMpydXrXcZUPqAi3BakqGP7vzKTIxv2c4E/5BLuunli/z3Qbp5049nad+3/ZQM7+YEdDMKZVA0u0cBcCZwIIX40IJ6jizOeDDJmZltGAaKDvC+8cMAEIR7ObIGGy99iql8IBs8NbMs1MAPBTAvSXYgzYD00CG3Prb9p1uxXz2PLsFdD6wwgsGCE+//CSAHlQOhIHnmL5JdkTVfAN/Yg55Ir24xAAAAAElFTkSuQmCC"/>Logout</a></li>
      			</ul>
    		</div>
  		</div>
    <!--------------------------------------HEADER------------------------------------------>
		<nav align="right" style="text-align: right;">
			<img id="search" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB00lEQVQ4T5VTQW6jQBDswvZqjzzBx0jZJDyBJ/AEDra0R/AL/ILA3iLZK/GD+Ak8AcWJtEeeQG5RbOitnhgHW1ak9GkYuouqrgIyqNmvLBRPQoj6quJDJFDgce/Jn6JKm2Fvf2bPR81v73MV1BysPREDqBUEgUxFNUSH5eolrc5BHMDsNluCA3Z2Qyp3KhyElLx6JaOpMdqPkJwzgdGGp5F22Ag0FqAev0vx9lOaSSuRika8q8hiSjbN6mmRDFnAqHeK0lFlrZ/SfNgQB5k/brWA8AOi8Wq7CC8D8OV6u4guLcokHu87KdfPqUlzhdnNvaGXpB+c0+ubCGC0/cNzM2TpJEiLQj1NyCC+xKCX6UFDk/t3m1LOJ4MNV5/T/+CrHdDiwgBG78gf/qXOMSdhfpPFB+sYFE0YnA2Dk5tdtsBJqxtVLF0P9zTeITkBMBRbEn2u6H/jLFXLAPjMM1BIJ9UhVAHtDIahOibRFuUCI2gMzKWR1hIkZKhqy4eFzYCMKVpElswjgDH5fZVN9z/ErPTtSxwqKaeY7MjI07wT5MxLQEbMjeajHaITgEsO9Hfz6ywwp1wqrSjr48f7RhmIjBh3RdWJNJ5J+ca8a3XR7iTpF/wffLL5YpgtBXIAAAAASUVORK5CYII="/>
            <input type="search" placeholder="Search..." />
			Welcome <b>CUSTOMER</b>
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div class="cont" id="cont">
  				<div id="home">
  					<h3>HOME</h3>
					              Today:<b><?php echo date('l jS \of F Y');?></b>
					<div>
						<div class="block" style="width: 28%; float: left;">
							<b>Selling</b><br><br>
							<!-- CURRENCY SCRIPT -->
							<script type="text/javascript">
							$(document).ready(function () {
								$('#btnConvert').click(function () {
								    var from = $('#from').val();
								    var to = $('#to').val();
								    var amount = $('#amount').val();
								    
								    $.ajax({
										url: 'https://currency-api.appspot.com/api/'+from+'/'+to+'.jsonp',
										dataType: "jsonp",
										success: function(resp) {
											$('#result').html((resp.rate*amount).toFixed(4) + " " + resp.target);
										}
									});
								});
							});
							</script>
							Enter Amount: <input id="amount" maxlength="10" size="15" value="1" style="width: 100%"/><br>
							From:
							<select id="from"  style="width: 100%">
								<option value="ARS">Argentina Peso</option>
								<option value="AUD">Australia Dollar</option>
								<option value="BTC">Bitcoin</option>
								<option value="BRL">Brazil Real</option>
								<option value="CAD">Canada Dollar</option>
								<option value="CLP">Chile Peso</option>
								<option value="CNY">China Yuan</option>
								<option value="CZK">Czech R. Koruna</option>
								<option value="DKK">Denmark Krone</option>
								<option value="EUR">Euro Member</option>
								<option value="FJD">Fiji Dollar</option>
								<option value="HNL">Honduras Lempira</option>
								<option value="HKD">Hong Kong Dollar</option>
								<option value="HUF">Hungary Forint</option>
								<option value="ISK">Iceland Krona</option>
								<option value="INR">India Rupee</option>
								<option value="IDR">Indonesia Rupiah</option>
								<option value="ILS">Israel Shekel</option>
								<option value="KRW">Korea (South) Won</option>
								<option value="MYR">Malaysia Ringgit</option>
								<option value="MXN">Mexico Peso</option>
								<option value="NZD">N. Zealand Dollar</option>
								<option value="NOK">Norway Krone</option>
								<option value="PKR">Pakistan Rupee</option>
								<option value="PHP">Philippines Peso</option>
								<option value="PLN">Poland Zloty</option>
								<option value="RUB">Russia Ruble</option>
								<option value="SGD">Singapore Dollar</option>
								<option value="ZAR">S. Africa Rand</option>
								<option value="SEK">Sweden Krona</option>
								<option value="CHF">Switz. Franc</option>
								<option value="TWD">Taiwan Dollar</option>
								<option value="THB">Thailand Baht</option>
								<option value="TRY">Turkey Lira</option>
								<option value="GBP">UK Pound</option>
								<option value="USD" selected>USA Dollar</option>
								<option value="VND">Viet Nam Dong</option>
							</select>
								<br>
								To:      <select id="to" style="width: 100%">
									<option value="ARS">Argentina Peso</option>
									<option value="AUD">Australia Dollar</option>
									<option value="BTC">Bitcoin</option>
									<option value="BRL">Brazil Real</option>
									<option value="CAD">Canada Dollar</option>
									<option value="CLP">Chile Peso</option>
									<option value="CNY">China Yuan Renminbi</option>
									<option value="CZK">Czech Republic Koruna</option>
									<option value="DKK">Denmark Krone</option>
									<option value="EUR">Euro Member Countries</option>
									<option value="FJD">Fiji Dollar</option>
									<option value="HNL">Honduras Lempira</option>
									<option value="HKD">Hong Kong Dollar</option>
									<option value="HUF">Hungary Forint</option>
									<option value="ISK">Iceland Krona</option>
									<option value="INR">India Rupee</option>
									<option value="IDR">Indonesia Rupiah</option>
									<option value="ILS">Israel Shekel</option>
									<option value="KRW">Korea (South) Won</option>
									<option value="MYR">Malaysia Ringgit</option>
									<option value="MXN" selected>Mexico Peso</option>
									<option value="NZD">New Zealand Dollar</option>
									<option value="NOK">Norway Krone</option>
									<option value="PKR">Pakistan Rupee</option>
									<option value="PHP">Philippines Peso</option>
									<option value="PLN">Poland Zloty</option>
									<option value="RUB">Russia Ruble</option>
									<option value="SGD">Singapore Dollar</option>
									<option value="ZAR">South Africa Rand</option>
									<option value="SEK">Sweden Krona</option>
									<option value="CHF">Switzerland Franc</option>
									<option value="TWD">Taiwan New Dollar</option>
									<option value="THB">Thailand Baht</option>
									<option value="TRY">Turkey Lira</option>
									<option value="GBP">United Kingdom Pound</option>
									<option value="USD">United States Dollar</option>
									<option value="VND">Viet Nam Dong</option>
								</select><br><br>
								<div>
									<input id="btnConvert" type="button" value="Convert" style="padding:5px; 10px; display: inline-block;"/>
									<div id="result" style="padding: 2px; margin: 5px; font-size:20pt; display: inline-block;"></div>
								</div>
						</div>
						<div class="block" style="width: 59%; float: right;">
							<b>Loan request</b><br><br>
							<input type="number" placeholder="Amount"><br><br>
							<input type="button" value="Request">
						</div>
						<div class="block" style="width: 94%; float: left;">
							<b>Other info</b><br>
						</div>
					</div>
  				</div>
  				<div id="trans">
  					<h3>MY LAST TRASNFERENCES</h3>
  					<table>
						<thead height="50%"><tr>
								<th>Date</th>
						        <th>Title</th>
						        <th>Details</th>
								<th>Amount</th>
						</tr></thead>
						<tbody>
							<?php /*$query=mysqli_query($conn, "SELECT `date`, `title`, `details`, `amount` FROM `{$_POST['user']}` WHERE NOT date=''");
                    			while($row = mysqli_fetch_assoc($query)) { //ULTIMOS 10 
                    				echo "<tr href='?date={$row['date']}#visualizar'>
                    					<td>{$row['date']}</td>
                    					<td>{$row['title']}</td>
                    					<td>{$row['details']}</td>
                    					<td>{$row['amount']}</td>
                    				</tr>";
                    			}*/
							?>
						</tbody>
					</table>
				</div>
  				<div id="hist">
					<link rel="stylesheet" href="http://factmint.io/stacked-area.css">
					<script async src="http://factmint.io/stacked-area.js"></script>
  					<h3>HISTORY</h3>
  					<div style="width: 80%;">
  					<table class="fm-stacked-area" data-fm-y-label="Amount" data-fm-date-format="YYYY-MM-DD" data-fm-value-prefix="$">
						<thead>
							<tr>
								<th>Date</th>
								<th>Collection</th>
						        <th>Payments</th>
							</tr>
						</thead>
						<tbody>
							<?php /*$query=mysqli_query($conn, "SELECT `date`, `amount` FROM `{$_POST['user']}` WHERE NOT date=''");
                    			while($row = mysqli_fetch_assoc($query)) { //ULTIMOS 10 
                    				echo "<tr href='?date={$row['date']}#visualizar'>
                    					<td>{$row['date']}</td>
                    					<td>{$row['amount']}</td>
                    				</tr>";
                    			}*/
							?>
    					</tbody>
  					</table>
  					</div>
  				</div>
		</div>
    <!--------------------------------------FOOTER------------------------------------------>
		<footer>
			<div class="">
	        	<label>Explore</label><br><br>
	            <ul>
	            	<li><a href="">About Us</a></li>
	            	<li><a href="">Institute</a></li>
	            	<li><a href="">Site Map</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Rel. Sites</label><br><br>
	            <ul>
	            	<li><a href="">Chase</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Terms & Priv.</label><br><br>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            </ul>
			</div>
			<div class="">
	        	<label>Contact Us</label><br><br>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            	<li><a href="">Terms & Conditions</a></li>
	            </ul>
			</div>
		</footer>
    </body>
</html>