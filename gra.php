<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kurczakowe siły kurczakowej armi kurczakowych znaków</title>
		<meta charset="UTF-8" />
		<link rel="Stylesheet" type="text/css" href="tetris.css" />
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
						<div id="pole_gryALERT">
							<form enctype='multipart/form-data' action='db/addRanking.php' method='post'>
							Wynik: <font id="punktyval1"></font> <input type='text' value='' name='punkty' id="punktyval2" style="display: none;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' style='background-color: rgba(0,0,0,0); border: none;' class='ButtonAgain'><b>⟲</b>&nbsp;&nbsp;Zapisz wynik</button></form>
						</div>
					</div>
					<div id="punktyBOX">
						Twoje punkty:
						<div id="punkty">0000</div>
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
		<div id="stopOverflow">Wyłącz scrollowanie</div>
		<script type="text/javascript" src="script.js">
			
		</script>
		<script>
			var stopOverflow = document.getElementById('stopOverflow');
			var keys = [37, 38, 39, 40];

			function preventDefault(e) {
			  e = e || window.event;
			  if (e.preventDefault)
				  e.preventDefault();
			  e.returnValue = false;  
			}

			function keydown(e) {
				for (var i = keys.length; i--;) {
					if (e.keyCode === keys[i]) {
						preventDefault(e);
						return;
					}
				}
			}

			function wheel(e) {
			  preventDefault(e);
			}

			function disable_scroll() {
			  if (window.addEventListener) {
				  window.addEventListener('DOMMouseScroll', wheel, false);
			  }
			  window.onmousewheel = document.onmousewheel = wheel;
			  document.onkeydown = keydown;
			  stopOverflow.addEventListener("click", enable_scroll);
			  stopOverflow.innerHTML = "Włącz scrollowanie";
			}

			function enable_scroll() {
				if (window.removeEventListener) {
					window.removeEventListener('DOMMouseScroll', wheel, false);
				}
				window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
				stopOverflow.addEventListener("click", disable_scroll);
				stopOverflow.innerHTML = "Wyłącz scrollowanie";
			}
			
			stopOverflow.addEventListener("click", disable_scroll);
			
			</script>
			
	
	</body>
</html>