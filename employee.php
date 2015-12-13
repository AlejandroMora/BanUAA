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
        			<li><a href="#signup" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFIklEQVRYR6VXS24bRxCtGtKCd+EyWYnZGUgkTE6QWWVr5gQmEBkwsiKVC/AEpLILQAbgEXgE5gQeSw6QJXMC0zvDIqfyXvU0NRoyHCqZDTmf7q5+9d6rapXadfXtJNPEembSEdFzvM5FZc3P1KRrIt04RMXwCO9U3+L/WkzyQqWrortvqtNjzne/3w0X1We6F8DFeG6iC8y8lkTScuF1616WmzPp7b43S2d3133ev74YLxHeBwSDoO2jj8F/Dy4EmEuBjSSSzW6Ho6MBcDJTDVGGQamYZaqyKkyX2Gmfk2OJ+fRuOPcAvpmkpniGb9UMQeqc99yECe4RAP6vAGE6vb0enBQAFgKM+j1gxcAIvX3UrfYksRsEiV2Xl+HbcpeqNsL/cwRNJBBASF9EZXp3nR1PweV4ZaYDBNCLEMcBP11Meo4A0KjupJ9OOs+2tsBiq/a9jn77a7iKY8gpQu+pEBvMbq+xsYdrnwMIQArtA65+PYDqwFP/O6kdFaTTJAMCzqsKKg83b15Muttn2InqnCmo7jLupE6ipkCcH4mnJQcC/UYEQMLcSRhY7qyPEMf8XUEph6B25VSu6Z9DLCpydTkZMQUgaP++pdk8H1Z58XgPV0iBmo7IXgbAvCdgfYEJqOESJUgVE1Jq+Hb2frgM42RV+kKuW1nEAFxZ+A7knZ+EANh/g7BeQmY/Buhtvkk0ZeRE4/kn6VSJFlGq7qy6rdInIE0bnRQAVVAlIVGoO1hT7uP7KgeA2Mvp7fC7ZhUAAearztj/EogjCEWBhJDmaSSMTtipMp5EgpfnRIK7ivnlbsgL/m7PbFB3umoAdMmjMuQkzFcROCC+2OX4Rraw1gQmAu+PUoWul6hFX+A3NbO/g91ahjrylsUrFp4oX7diGFFjAJQYqhlQkC4R8AXPLG991pTEi74PN+xSGfwF45fUuhY6KhLcQ46btuQk5c4JC1nCkG4aA/Adm+ZRdq5j5JFSO5V41e9ieeczSLTXqAIiEFxLBAh4KqLMWlvJnqoGBmBb+xL14KukJeeN1ZCGUvrAYxJejBdwv0Fd/5GAn57L+pAPlCkATwRGVfw8e//LD40ypBPG2s2cs86zvhMRv29BVkjTfUsW7UJYOeGI7IRYtr0x+TUR+wDbfdfeoEdgOff+wFWQHQ2gbEjYeHQIF+Q3qA70kuzMl3zbkiVdkZ0SiYgUrfGsQ8UwjZtE5kwbA+Cih7xlrxyzGEGGo0Qti/l6fTGBKYXu56nXQyEK/UCzClgNacUH+renLu4KCpWQ7d3y1GIUKpe68Tw0oZiDhKuTsCkoDwAtG9IABJS14OsmDjgC7GJImLgo08CB7I6ZZ+abzPccs/kEyZIC5Ri/NCF+60YUAkjdKUVenRRAkKEXo4wTVDtakpJdMuZnP5CyD6y24FQC3qFrlnUcXwZAYj/qspyYdQhLH5gTNno/63+7MDA69AP8ns/4n+gQhTjHQR8oOUDVQJokIYPfXfsqgBVDy2yf9ipXU74PvY9GRFSitI8GQCv2kxEKR923/0cAu12fdDJiOabZlA7XUdVXu8XN/vAWu7wcLZgWb+mGLM+RlLFJjV023bPuJ/+WglVcwCfBEc1aktHP+dzZXt6XLueki+89eDaoLNXeqBrd0492jYfT3dkwSAcMd59H/sJRDJOhxSoPm2i1PF1hARzDyJ0gRTIe9xzPX5yc/fi2OikFseWuUBXe4PLiSXcXFInlzx4uT0Us5zsUmSJjQdNlPYB/AJ18aE4kNt/BAAAAAElFTkSuQmCC"/>Sign-up</a></li>
        			<li><a href="#mortgages" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFAklEQVRYR51XQW7bVhR8j5KD7KobRN4VaJ0oJ4h8gqgnsIDaQHcVfYGyF7CYXQApKH2CKCcIjyBYLdCddYOquyA2+TvzyC+wMkVR+SvJpv6fN2/ezKfKEevy5XQizg1EZShOliJ6r+oUW9w/BHqbLMPNEdvZo/xxqzUeTHsnmVvg4Z5TXQBIn5+xQR+7pNjqrWTy0+yvEMDar9YAuOXPZ9NRkMvaBW6iot9JLr+7jgxVDIzkTtMPq5AgW69GAL98P+1nJ/KbE9CsutZMFqzQWoHq53dhhM+ROnnhnNyiHRGYSGarMGmLYC+Aqx+mA1bafdDo/d/humnDq7PpWMRN0JoErQEjumgLohYA+93NXDJfXY+qB/PvFBqZ+fJcNruiuzy7ScgUhdoWRC0AUtz9KgtfOdmQwMUQ22B2d927Oruh0KD4p3QThCr+52TQedDxIfb2AYjYX1a/Vb/K0omMul91mJ04VIrvTl/NV+H51cub2Ilu+Bv/PNqRKtoxW10Pm9p3EIAXXEGr9HHohGKzA0Tezu7C1wCwAYAYYlyz95c/ToeibkLGNNNR02jWAmBFoJpKF1C6QF9ZzciqznUBin/Fvz5BeGNWWLREYwoR3wf8Hf6W0i84on6vOiYOM8Ce5hpjIiI83AMDkQZuhIrX+H5hDBSHpQQ0v7s2T9i6Jj5DzJiS+rWXAVhrRJVzxOACfVSCw6UHS4DIrAULsEIGBmSMJhSofAQg27Nsw5i27UG1ZoBj9vhMUE0hxHK87nHguTGgNhEplc4WsE1gJAHIsbGk+hk/+9c8QfUVQJ0exUDRQ6ucbofe4jtHEYuC2lKOPCC9NnqiaIP0CdosW92QbXoMJGkKqUYrNhAC8Yn8gYMgumKZRT+Dyp0uTfXl7PtR3Fdt6xZUH7S5zuHxoBu0f6yL3ZIBSMSiGUv/0Vxu2yTjUWlowgqQfggl6bg3GK93HmzRMgujGEgwIYUecnxvSsjmFlT6vlV2ACZyXEYCuKHTezohgXUfZU3bLdLRDWnT1FAhRBhU6Su7bXgCoEhBuUAFr/kw7HfjNzAGuMCCd0ZUGAVMQhGEkCbzP8PUpuiEkwJhko1ijGsN6QkAGggf5sxDVHQ9qt+uWrDaDTf0AHCA3X7oERQkjagaQJYRpXfYb3JJCbDKQh0ACyJW6z2fAGjF5v/oP25BI9JcuB9pcn1LwAz3gQ7MqUK3j2gAWbIY7y0exNMWwFarCUaTYbazOh7ob0F2J2T2F+D4vwTgUgLwLspD/N0CDMVk4SAAGyl4vx8h0ljSy3DamPNRaLRmRDBpRW9guYp4Rr/ZJoivqvzy2rbGc7xPWMjtZcB7uA+Q4l7ooGhLtogXEm7oe2/pWIaTTUcp0mqlfnzJ2m4w7Q0jbuwFU975LJQYLFsA1AGywQTGRTYwpmTifwxQTwDJRw4y4Kmx3uca+VaU/p6gv/1uLhOKCn6fAOjIb26Kr0m/0htGkut41x0bjaislFctCyR/KfUTQsvFoe8MgMN7Ar1j5xATYS5IUgnrbsoHrdhrAvR/zgL9VE02spJ1JH3+BZVj7V5Ay6s9ckTj3fnfK8KqQquf/T3vsaPjpngtx+4NZv6cU4I4jr85jnfBWEsoNBsBxDHGEoAmZAAXmAuo/BSUDmjPbV/RDragCsK/Ldl7obhTe0ktl7+yEdAxb8lHAdhOCMZqO6L2TiAQoaTHHs79/gMvaEROz6IeXwAAAABJRU5ErkJggg=="/>Mortgages</a></li>
        			<li><a href="#clients" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEaElEQVRYR81XUXLiRhDtlrB/zZ7A7F+qEmz2BMYnWHyCQMVU5c/IFwh7AST/pQpSYU+w5ARLTrBgNlX5M3uCZX9XSL2vRxosFAQGVyWZDxtJM5rX3e+9aTHlxnW1N2Lmc9yu6CMhWuDPhPFfmCZ6j0nMPWGur5aLmDl6Hbo8HU4883vXwJrH0T7rBdiwwUJzYr7Ytbj4udz17287T1m/DqDa06iGg3svsIuvf/Afo0xvIhNlZqoVbYCX/iJCwWDmebtArAG4PuvNNbWD2W1j18Jtz9tVv4k6/Y45E4qo1f/LM6XbNHIl8IVE/uzPbv8R9b6A2t/7NXJlLMRImHRRkrt/FYBu1qz55aNIxuDTOTI7Cl1q5cm5NQPXZ34HhDwHMSsFGZgg1Qukbe5EPN2U6hTEKCX1JHToMgtiK4D2GUqyx7CSLYXU+vVvb55dCnkPIe8flRf9e++VffYEAHIXOtzVVEIh75YO3ZViQmakERN3kaEFytzBi8p4Psb9OqI92US+drWn5bgAgNW+hQB+/s6vRMf0ACv6QsKd/swbJiWRZszkc8yfmCXIgGoiqjIABinYU47oMluWvQCo/tmh9yBPCzWuM/GJG5LRdXQkQ8PumDxxpAMe1AUgNRsA1UVmAgfMT8nXUvC6LgFANSiivLMEjwBk6obciI4IqUXExL6xYmySpwfMZ6ygyDHzVH4vMGdhZQ0A6gera11fWAILIBa6QjQdpPp96Su9XR7LGNk4FZG32GRkonZEjQsl4BNDRKIAYKZaIsz9bElnSJ3zmUIA1s0UwG8zb5RcSxJ1xPW85IzcYpkrAENI4Q8AMAWoG0u6vQCAcF3j6URvgLqGaIcO0zsLaJM6DUmJfCjgFcowNBzAeBYAu1gBQRHNwf1tkSmRVY4eREuX3pQiUe2/fhYA1PqPpcvNVPv1befE6hCCchSs8QNS1nucIfXaWVNMQlMCSAz1TlhteoTX0PnLomZj5XYogXIkbW5MBiwADSh72m4FAPQ3FNPVskQTm061UnU5N6JF1m5t9ClnKgD7oEpQ3qwBAKfQb6CcydieAditiZz4wdQ0Vqmp7SYyRCS4hsGgk1K2628cNi80QwpIYEo69zkATM0TdsPZ4HbaaACUl+2a1GDgE6fJHLqCBLuDj97YKukwANqKqZTgbqWQTcpgwSNsrh2TiTw7fqr6DWO/yBbcBpllnCNo21heqnJWHHhqCbSjEVdGS4drMJi0ZnwjMV1qdHkAep2YEX02PuBCBSiLLdXeAJLa+uARdU3DIdxA+pUTa+nPA0lPPLXkinHEFPBBANK0at1tBzx0v3KQbzayIGzds8e4Pj8IwKY0H3rvPweQdMn0QX3iST5waKTb1qWc+l8D6C20q4HuO+GxXMDFKpsiQl+4kiG6pU/bSJldvzMD9vB4Tvo1gKL1+J5E7/ho4Tpv7Sww5zkaTtydxKItNi30IDLersaEj9LVyx0jTXMNCy7DMdc/Vjd9XYvpkALbpOrab2GXgk7O76JLAAAAAElFTkSuQmCC"/>Clients</a></li>
        			<li><a href="#" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFPUlEQVRYR71XQXIaVxDtnkGq7IxOYLLLIrLQCYJPEPkERhW5KjsDFzC6gBh2qZJcGp1A+ATCJwBLSVV2Qicw2rkMTPu9nhnAWEgjp5ypQhrgz+/Xr1+//mi92imXErlWkbLgMpEx/gx575dKP781sVFgMjLV2vz7lRs164cTvfnr3+Zo3Zrlz/XVdqeOjfcAoGKmjfmXgVRx76Cw6dqAdwThM+Pjq1ahZ/Rg+yhmcISJESnCw2+OL1vdIujvWnPwa6emgXSOL5u7RfYAA0f9RDQKmK1aFfRXRfWJJdI8+bs5p7/IZlyTAbgAAOT18KWvnnUM15mYxqWpjKYb1gYbT1VtFyUZANDhY4B8H4BEnnutVSqTUHrhTGoqVvfSqO6YQYgFgXwfADCgiUbH/zSHB886DQQczULpbyRkQ+opkfoEIHoAuB8Pm+N15K4CoMjDifTXdUVaAjKQql5OLpvRn790KtNNqStbDi+UIwITLNWNs5JonWDXiVACi08uW5UcjJh9QAIDADlcBeIA0P3d8LNGyLpsgTVM5eLtZeuMG0CYdQSHT9gWGMB7ALlHoPSVjZnsHV814wUA2ceeFYB/g2DtaSDdnEUAOBonpk5zoFZLRAYBnAagEFjOJ4GecUNTa6voR2wABuRFLsw0oO3gc3SROov5BQYreO65mrbZYZZoL2OTXbbPPbwNEWhoomMgi9AJaEODIek1Pr9NTQj3iXSTAFmwHChBDgCaaWPN3iIqAMJJPWN3Tc+858EDX3eN18/Y83Vi8sIBIOGe1xqOuEw/grUBbIDs3vO7rCue5ui97wEA/yhKd0CsAwBd6COBrYcGt9URAI3BMNewrEPs9zIFAIrcAyg8sTLAcJOIWf6x3dkLxL0hYouWEht+y4DsgKFD6gfFG+N5t/A0iFVQxrZ3FEwOyYxKE23PNrGPSLwoASiaB4QWlhd/+knG3IDAVPV3ds3XJQAAXJgpMaISBJMY01fILL65nYZax9BDZyH77JqEWvNZAKQjnaFOoeyVPkvMgFjcyIZQGSU6p3KpD/j8xTIAZwhizQDcsO55ADzXp/KBLAa4LQcxsxjAaui6KlsyBZAquI8gMQNzAwpyY4IMAjcj1E0qicppgKG1DGAuvjU33uaGNqSG4KpgY0tmWst9JNWAnwE0ghnVvHRkA4GBFEOl1XWhmYF+ik1f3wcgNzEYGoFLOmsERgZHNXtPFpad9CsNEIC3TtoN5wB1CwHCmhWthuCBO+Jv9wHIzWcSyBYDgeGeixFJ3eWeCwawCEiHyLKadUIZtMMT5BQtBBe0KtTbmG3K9X0A3JgS+Vi0TLkP9EkZBeVeIHQsAKEJ4WyA4DAzBSO2u9oFd5U+ny9FxvhchLBZTrqe05bWHD2rVCyB0MFSs+F4XmrD/w4gdTJXPfuU92jFXt6K3wApCKDwiSjz8hp7lmXITskN1wHMaXFK4gFZOTdOi4iwMAAeGNCbHD7wfNY6HcU5EDLAFs2ARA9p4NEnIn8AQ8dPxRgSHEysOQ+qb6+avVTVPpTG8Pu+O+Hqb4clIdCG8bZamAE+y16l6cAe3+FQGlGQYKKM7GlMpydXrXcZUPqAi3BakqGP7vzKTIxv2c4E/5BLuunli/z3Qbp5049nad+3/ZQM7+YEdDMKZVA0u0cBcCZwIIX40IJ6jizOeDDJmZltGAaKDvC+8cMAEIR7ObIGGy99iql8IBs8NbMs1MAPBTAvSXYgzYD00CG3Prb9p1uxXz2PLsFdD6wwgsGCE+//CSAHlQOhIHnmL5JdkTVfAN/Yg55Ir24xAAAAAElFTkSuQmCC"/>Logout</a></li>
      			</ul>
    		</div>
  		</div>
    <!--------------------------------------HEADER------------------------------------------>
		<nav align="right" style="text-align: right;">
			<img id="search" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB00lEQVQ4T5VTQW6jQBDswvZqjzzBx0jZJDyBJ/AEDra0R/AL/ILA3iLZK/GD+Ak8AcWJtEeeQG5RbOitnhgHW1ak9GkYuouqrgIyqNmvLBRPQoj6quJDJFDgce/Jn6JKm2Fvf2bPR81v73MV1BysPREDqBUEgUxFNUSH5eolrc5BHMDsNluCA3Z2Qyp3KhyElLx6JaOpMdqPkJwzgdGGp5F22Ag0FqAev0vx9lOaSSuRika8q8hiSjbN6mmRDFnAqHeK0lFlrZ/SfNgQB5k/brWA8AOi8Wq7CC8D8OV6u4guLcokHu87KdfPqUlzhdnNvaGXpB+c0+ubCGC0/cNzM2TpJEiLQj1NyCC+xKCX6UFDk/t3m1LOJ4MNV5/T/+CrHdDiwgBG78gf/qXOMSdhfpPFB+sYFE0YnA2Dk5tdtsBJqxtVLF0P9zTeITkBMBRbEn2u6H/jLFXLAPjMM1BIJ9UhVAHtDIahOibRFuUCI2gMzKWR1hIkZKhqy4eFzYCMKVpElswjgDH5fZVN9z/ErPTtSxwqKaeY7MjI07wT5MxLQEbMjeajHaITgEsO9Hfz6ywwp1wqrSjr48f7RhmIjBh3RdWJNJ5J+ca8a3XR7iTpF/wffLL5YpgtBXIAAAAASUVORK5CYII="/>
			<input type="search" placeholder="Search..." />
            Welcome <b>EMPLOYEER</b>
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
						<div class="block" style="width: 26%; float: right;">
							<b>Loan</b><br><br>
							<input type="number" placeholder="Number of account"><br>
							<input type="number" placeholder="Amount"><br><br>
							<input type="button" value="Loan">
						</div>
						<div class="block" style="width: 26%; float: right;">
							<b>Deposit</b><br><br>
							<input type="number" placeholder="Number of account"><br>
							<input type="number" placeholder="Amount"><br><br>
							<input type="button" value="Deposit">
						</div>
						<div class="block" style="width: 94%; float: left;">
							<b>Other info</b><br>
						</div>
					</div>
  				</div>
  				<div id="signup">
  					<h3>SIGN-UP</h3>
  					<form method="POST">
						<h3>Personal data</h3>
  						<input type="text" style="width: 32%" name="names" placeholder="Name (s)">
						<input type="text" style="width: 32%" name="lnames" placeholder="Last names">
						<input type="text" style="width: 18%"name="birth" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')"><br>
						<input type="email" style="width: 32%" name="email" placeholder="E-mail">
						<input type="tel" style="width: 25%" name="tel" placeholder="Phone">
						<input type="tel" style="width: 25%" name="cel" placeholder="Celphone"><br>
						<input type="text" style="width: 89.6%" name="address" placeholder="Address"><br>
						<input type="text" style="width: 43%" name="school" placeholder="School">
						<input type="text" style="width: 43%" name="area" placeholder="Area"><br><br>
						<h3>Account settings</h3>
  						<input type="text" style="width: 29%" name="user" placeholder="User">
						<input type="password" style="width: 26.5%" name="pass" placeholder="Password">
						<input type="password" style="width: 26.5%" name="npass" placeholder="New password"><br><br>
						<input type="submit" style="width: 18%; float: right;" name="send" value="Update">
					</form>
  				</div>
  				<div id="mortgages">
  					<h3>MORTGAGES</h3>
  					<p>Here is the mortgages...</p>
  				</div>
  				<div id="clients">
  					<h3>CLIENTS</h3>
  					<table>
						<thead height="50%"><tr>
						        <th># Account</th>
								<th>Names</th>
						        <th>Last name</th>
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