<meta charset="UTF-8">
<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	$db_host = "us-cdbr-azure-southcentral-e.cloudapp.net";
	$db_user = "b34dad7d0c4e46";
	$db_pass = "262ef9b4";
	$db_name = "BanUAA";
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	//mysqli_query($link, "CREATE TABLE `USERS` ( `account` INT(6) NOT NULL AUTO_INCREMENT , `user` VARCHAR(16) NOT NULL , `pass` VARCHAR(16) NOT NULL , `amount` DECIMAL(16,2) NOT NULL DEFAULT '0.00' , `names` VARCHAR(30) , `lnames` VARCHAR(30) , `birth` VARCHAR(10) , `email` VARCHAR(30) , `tel` VARCHAR(10) , `cel` VARCHAR(10) , `address` VARCHAR(60) , `school` VARCHAR(40) , `area` VARCHAR(15) , `type` VARCHAR(8) NOT NULL , `employee` VARCHAR(16) , PRIMARY KEY (`account`))");
	//mysqli_query($link, "INSERT INTO `USERS` (user, pass, amount, type) VALUES ('admin', '123', 99999999999999.99, 'employee')");
	//mysqli_query($link, "INSERT INTO `USERS` (user, pass, names, lnames, birth, email, tel, cel, address, school, area, type, employee) VALUES ('josue', 'josue', 'Josue Ramon', 'Zavala Soto', '1995-08-22', 'josue_22__@hotmail.com', '', '4491042526', 'direccion', 'UAA', 'Sistemas', 'customer', 'uno')");
	//$id = mysqli_insert_id($link);
	//mysqli_query($link, "CREATE TABLE `{$id}` (date VARCHAR(10), description VARCHAR(60), amount DECIMAL(16,2))");
	//mysqli_query($link, "UPDATE `USERS` SET type='employee' WHERE account = 41");
	//mysqli_query($link,"DELETE FROM `USERS` WHERE account = 31");
	//mysqli_query($link, "DROP TABLE `21`, `31`");
	//mysqli_close($link);
	
	session_start();

	//USO CON FINES DE TESTEO
	/*$query =  mysqli_query($link, "SELECT * FROM `USERS`");
	while ($resp = mysqli_fetch_assoc($query)){
		echo "{$resp['account']} {$resp['user']} {$resp['pass']} {$resp['amount']} {$resp['names']} {$resp['lnames']} {$resp['birth']} {$resp['email']} {$resp['tel']} {$resp['cel']} {$resp['address']} {$resp['school']} {$resp['area']} {$resp['type']} {$resp['employee']}<br>";
	}*/
	
	function currency(){
		echo '
			<div class="block" style="width: 28%; float: left;">
							<b>Selling</b><br><br>
							<!-- CURRENCY SCRIPT -->
							<script type="text/javascript">
							$(document).ready(function () {
								$("#btnConvert").click(function () {
								    var from = $("#from").val();
								    var to = $("#to").val();
								    var amount = $("#amount").val();
								    
								    $.ajax({
										url: "https://currency-api.appspot.com/api/"+from+"/"+to+".jsonp",
										dataType: "jsonp",
										success: function(resp) {
											$("#result").html((resp.rate*amount).toFixed(4) + " " + resp.target);
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
			';
	}
	
	function footer(){
		echo '
			<footer>
				<div class="">
		        	<label>Explore</label><br><br>
		            <ul>
		            	<li><a href="./index.php#aboutus">About Us</a></li>
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
			</footer>';
	}
?>
