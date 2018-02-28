<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kurczakowe siły kurczakowej armi kurczakowych znaków</title>
		<meta charset="UTF-8" />
		<link rel="Stylesheet" type="text/css" href="style.css" />
	</head>
	<body onload="draw()">
		<?php
			include_once("navLog.php");
			include_once("pages/header1.php");
		?>
		<center>
				<img src="img/blockBG.png" id="testIMG" style="display: none;"/>
				<img src="img/bg.jpeg" id="bg" style="display: none;"/>
				<div id="gra">
					<div id="pole_gryALL">
						<div id="pole_gry"></div>
						<div id="pole_gryALERT"></div>
					</div>
					<div id="punktyBOX">
						Twoje punkty:
						<div id="punkty">000</div>
					</div>
					<div id="nextFiguraBOX">
						Następna figura:
						<div id="nextFigura"></div>
					</div>
					<div id="infoBoxL">
						<br /><br /><br /><br /><br /><br />Aby zatrzymać<br /> lub wznowić grę, przyciśnij:<br /><br />
						<font id="startstop" onClick="startstop()">STOP</font>
					</div>
					<div id="infoBoxR">
						<br />Autorzy:<br /><font color="darkred">Jak na górze:<br /><br />- Dominik Pająk<br />- Marcin Podraza</font>
						<br /><br /><br /><br /><br /><br /><br /><br /><br />Inne nasze prace:<br /><br />
						<font color="darkred"> Jeszcze się robią<br /> :) </font>
					</div>
				</div>
		</center>
		
		<script type="text/javascript" src="script.js">
		
			
		</script>
			
	
	</body>
</html>