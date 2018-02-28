var tabTetris = [];
var obracanie = ["N","E","S","W"];
var wys = 18;
var szer = 11;
var gameSpeed = 700;
var z = setInterval(move, gameSpeed);
var check = 0;

var punkty = 0;
var punktyBox = document.getElementById("punkty");

var osum;
var tsum;
var thsum;
var fsum;

var osumpjed;
var tsumpjed;
var thsumpjed;
var fsumpjed;

var osummjed;
var tsummjed;
var thsummjed;
var fsummjed;

/*WARTOŚCI STARTOWE DLA PIERWSZEJ FIGURY*/
	var random = parseInt( ((Math.random() * 10) % 7) + 1);
	var radomTemp = parseInt( ((Math.random() * 10) % 7) + 1);
	nextFigura = document.getElementById("nextFigura");
	nextFigura.innerHTML = "<img src='img/figura"+radomTemp+".png' width='90px' height='90px'/>";
/*RESZTA TO FUNKCJE*/

var lose = false;

function Figury(figura) {

	switch(figura){
		case 1: 
			osum = 6;
			tsum = 17;
			thsum = 28;
			fsum = 39;
			
			sprawdzStart();
		break;// I
		case 2: 	
			osum = 6;
			tsum = 17;
			thsum = 28;
			fsum = 29;
			
			sprawdzStart();
		break;//L
		case 3: 
			osum = 6;
			tsum = 17;
			thsum = 28;
			fsum = 27;
			
			sprawdzStart();
		break;// odwrócone L 
		case 4: 
			osum = 6;
			tsum = 7;
			thsum = 17;
			fsum = 18;
			
			sprawdzStart();
		break;//.
		case 5: 
			osum = 17;
			tsum = 6;
			thsum = 5;
			fsum = 7;
			
			sprawdzStart();
		break;// T
		case 6: 
			osum = 5;
			tsum = 6;
			thsum = 17;
			fsum = 18;
			
			sprawdzStart();
		break;//Z
		case 7: 
			osum = 6;
			tsum = 7;
			thsum = 16;
			fsum = 17;
			
			sprawdzStart();
		break;//odwrócone Z
	}
}

function wyborFigury(){
	if( lose == false) {
		random = radomTemp;
		radomTemp = parseInt( ((Math.random() * 10) % 7) + 1);
		
		nextFigura = document.getElementById("nextFigura");
		nextFigura.innerHTML = "<img src='img/figura"+radomTemp+".png' width='90px' height='90px'/>";
		
		punkty += 1;
		dodajPunkty();
	}
}

function sprawdzStart() {
	if(tabTetris[osum + szer] == 2 || tabTetris[tsum + szer] == 2 || tabTetris[thsum + szer] == 2 || tabTetris[fsum + szer] == 2) {
		document.getElementById("pole_gryALERT").style.visibility = "visible";
		document.getElementById("pole_gryALERT").innerHTML = "Wynik: " + punkty + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font  onClick='window.location.reload(true);' class='ButtonAgain'><b>⟲</b>&nbsp;&nbsp;Jeszcze raz</font>";
		clearInterval(z);
		lose = true;
	}
}

function draw() {
	document.getElementById ( 'pole_gry' ).innerHTML = '<canvas width="'+ (szer * 30) +'" height="'+ (wys * 30) +'" id="pierwszy" ></canvas>';
	for ( var i = 1 ; i <= (wys * szer); i++){
		tabTetris[i] = 0;
	}
	
	Figury(random);
	
	//POCZĄTKOWA FIGURA
	tabTetris[osum] = 1;
	tabTetris[tsum] = 1;
	tabTetris[thsum] = 1;
	tabTetris[fsum] = 1;
	
	drawGame();
}
function drawGame(){
	var canvas = document.getElementById('pierwszy');
	var context = canvas.getContext('2d'); 
	
	var i = 1;
	var blockIMG = document.getElementById("testIMG");
	var tetrisLogo = document.getElementById("bg");
	
	for( var y = 0; y < wys; y++ ) {
		for( var x = 0; x < szer; x++ ) {
			if ( tabTetris[i] == 0 ){
				context.fillStyle = 'black';
				context.fillRect((x * 30), (y * 30), 30, 30);
				//context.drawImage(blockIMG, (x * 30 + x), (y * 30 + y));
			} else if ( tabTetris[i] == 1 ) {
				context.fillStyle = 'red';
				context.fillRect((x * 30), (y * 30), 30, 30);
				context.drawImage(blockIMG, (x * 30 ), (y * 30) );
			} else if ( tabTetris[i] == 2 ) {
				context.fillStyle = 'green';
				context.fillRect((x * 30), (y * 30), 30, 30);
				context.drawImage(blockIMG, (x * 30 ), (y * 30 ));
			}
			i++;
		}
	}
	context.drawImage(tetrisLogo, 0, 0 );
	
}

var szerwys = szer * wys;

function ruchDol() {
	var osumszer = osum + szer;
	var tsumszer = tsum + szer;
	var thsumszer = thsum + szer;
	var fsumszer = fsum + szer;
	if(osumszer > szerwys || tsumszer > szerwys || thsumszer > szerwys || fsumszer > szerwys || tabTetris[osumszer] == 2 || tabTetris[tsumszer] == 2 || tabTetris[thsumszer] == 2 || tabTetris[fsumszer] == 2) {
		tabTetris[osum] = 2;
		tabTetris[tsum] = 2;
		tabTetris[thsum] = 2;
		tabTetris[fsum] = 2;
		sprawdzCzy();
		
		obracanie = ["N","E","S","W"];
		
		wyborFigury();
		Figury(random);
		
		tabTetris[osum] = 1;
		tabTetris[tsum] = 1;
		tabTetris[thsum] = 1;
		tabTetris[fsum] = 1;
		
		drawGame();
	} else {
		
		tabTetris[osum] = 0;
		tabTetris[tsum] = 0;
		tabTetris[thsum] = 0;
		tabTetris[fsum] = 0;
		
		//RUCH W DÓŁ START
		osum += szer;
		tsum += szer;
		thsum += szer;
		fsum += szer;
		//RUCH W DÓŁ AKTUALIZACJA ZMIENYCH
		tabTetris[osum] = 1;
		tabTetris[tsum] = 1;
		tabTetris[thsum] = 1;
		tabTetris[fsum] = 1;
		//RUCH W DÓŁ STOP
		
		drawGame();
	}
}

function move() {
	ruchDol();	
}

function ruch(){
	obracanie.shift();
	switch (obracanie[0]){
		case "N":
			obracanie.push("W");
		break;
		case "E":
			obracanie.push("N");
		break;
		case "S":
			obracanie.push("E");
		break;
		case "W":
			obracanie.push("S");
		break;
	}
}

function prostaFunkcja() {
	osumpjed = osum + 1;
	tsumpjed = tsum + 1;
	thsumpjed = thsum + 1;
	fsumpjed = fsum + 1;

	osummjed = osum - 1;
	tsummjed = tsum - 1;
	thsummjed = thsum - 1;
	fsummjed = fsum - 1;		
}

function dodajPunkty() {
	if(punkty < 10) {
		punktyBox.innerHTML = "00" + punkty;
	} else if(punkty < 100) {
		punktyBox.innerHTML = "0" + punkty;
	} else if(punkty < 1000) {
		punktyBox.innerHTML =  punkty;
	}
}

function sprawdzCzy() {
	var poj = 1;
	for( var y = 1; y <= wys; y++ ) {
		var caly = 0;
		for( var x = 1; x <= szer; x++ ) {
			var poj2 = 1;
				
			if( tabTetris[poj] == 2) {
				caly++;
				if( caly == szer ) {
					punkty += 10;
					dodajPunkty();
					
					var poj2 = 1;
					for( var cyfr = 1; cyfr <= szer; cyfr++ ) {
						tabTetris[y * szer - szer + poj2] = 0;
						poj2++;
					}
					
					var tempTabTetris = [];
					for( var poSkasowaniuY = 1; poSkasowaniuY <= y * szer; poSkasowaniuY++ ) {
						if(tabTetris[poSkasowaniuY] == 2) {
							tempTabTetris.push(poSkasowaniuY);
						}
					}
					for( var o = 0; o < tempTabTetris.length; o++ ) {
						var temp = tempTabTetris[o];
						tabTetris[temp] = 0;
					}
					for( var o = 0; o < tempTabTetris.length; o++ ) {
						var temp = tempTabTetris[o];
						tabTetris[temp + szer] = 2;
					}
				}
			}
			poj++;
		}
	}
}

function zamiana0 (){
	tabTetris[osum] = 0;
	tabTetris[tsum] = 0;
	tabTetris[thsum] = 0;
	tabTetris[fsum] = 0;
}
function zamiana1 (){
	tabTetris[osum] = 1;
	tabTetris[tsum] = 1;
	tabTetris[thsum] = 1;
	tabTetris[fsum] = 1;
}

function startstop() {
	var strtstp = document.getElementById("startstop");
	if( strtstp.innerHTML == "STOP" ) {
		strtstp.innerHTML = "START";
		clearInterval(z);
	} else if(strtstp.innerHTML = "START") {
		strtstp.innerHTML = "STOP";
		z = setInterval(move, gameSpeed);
	}
}

function ruchWLewo (){
	osum = osum - 1;
	tsum = tsum - 1;
	thsum = thsum - 1;
	fsum = fsum - 1;
	
}

function ruchWPrawo (){
	osum = osum + 1;
	tsum = tsum + 1;
	thsum = thsum + 1;
	fsum = fsum + 1;
	
}

window.addEventListener('keydown', function(event) {
	switch (event.keyCode) {
		case 37: //Left
			//osum plus jeden = osum p jed = osumpjed.. itd
			prostaFunkcja()
			if(tabTetris[osum] == 2 /*TAK NIE POWINNO BYĆ*/ || tabTetris[osummjed] == 2 || tabTetris[tsummjed] == 2 || tabTetris[thsummjed] == 2 || tabTetris[fsummjed] == 2 || osum % szer == 1 || tsum % szer == 1 || thsum % szer == 1 || fsum % szer == 1) {
				
			} else {
				tabTetris[osum] = 0;
				tabTetris[tsum] = 0;
				tabTetris[thsum] = 0;
				tabTetris[fsum] = 0;
				
				tabTetris[osum - 1] = 1;
				tabTetris[tsum - 1] = 1;
				tabTetris[thsum - 1] = 1;
				tabTetris[fsum - 1] = 1;
				
				osum--;
				tsum--;
				thsum--;
				fsum--;
				
				drawGame();
			}
		break;
		case 38: // Up
			switch(obracanie[0]){
				case "N":
					switch(random){
						case 1: 
							if ( tabTetris[osum + szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[fsum - 2 * szer - 2] != 2 && (osum + szer) % szer != 0 && (fsum - 2 * szer - 2) % szer != 0 && (thsum - szer - 1)%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2 * szer - 2;
								
								zamiana1();
							}
						break;// I
						case 2:
							if (tabTetris[osum + szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[fsum - 2] != 2 && (thsum - szer - 1)%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2;
								
								zamiana1();
							}
						break;
						case 3:
							if (tabTetris[osum + szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[fsum - 2 * szer] != 2 && (osum + szer + 1)%szer != 1 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2 * szer ;
								
								zamiana1();
								
							}
						break;
						case 5:
							if (tabTetris[osum - szer - 1] != 2 && tabTetris[thsum - szer + 1] != 2 && tabTetris[fsum + szer - 1] != 2 ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer - 1;
								tsum = tsum;
								thsum = thsum - szer + 1;
								fsum = fsum + szer - 1;
								
								zamiana1();
								
							}
						break;
						case 6:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[ fsum - 2 ] != 2 ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2;
								
								zamiana1();
							}
						break;
						case 7:
							if (tabTetris[tsum - szer - 1] != 2 && tabTetris[thsum + 2] != 2 && tabTetris[ fsum - szer + 1 ] != 2 ){
								ruch();
								
								zamiana0();
								
								osum = osum;
								tsum = tsum - szer - 1;
								thsum = thsum + 2 ;
								fsum = fsum - szer + 1;
								
								zamiana1();
							}
						break;
					}
					drawGame();
				break;
				case "E":
					switch(random){
						case 1: 
							if ( tabTetris[osum - szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum + 2 * szer + 2] != 2 && fsum + 2 * szer + 2 < wys * szer){ 
								ruch();
								
								zamiana0();
								
								osum = osum - szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2 * szer + 2;
								
								zamiana1();
							}
						break;// I
						case 2:
							if (tabTetris[osum + szer - 1] != 2 && tabTetris[thsum - szer + 1] != 2 && tabTetris[fsum - 2 * szer] != 2 && (thsum - szer + 1)%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer - 1;
								tsum = tsum;
								thsum = thsum - szer + 1;
								fsum = fsum - 2 * szer;
								
								zamiana1();
							}
						break;
						case 3:
							if (tabTetris[osum + szer - 1] != 2 && tabTetris[thsum - szer + 1] != 2 && tabTetris[fsum + 2] != 2 && (osum + szer - 1) < szer * wys ){
								ruch();
								zamiana0();
								
								osum = osum + szer - 1;
								tsum = tsum;
								thsum = thsum - szer + 1;
								fsum = fsum + 2  ;
								
								zamiana1();
								
							}
						break;
						case 5:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum - szer - 1] != 2 && (thsum + szer + 1)%szer != 1 ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer + 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum - szer - 1;
								
								zamiana1();
								
								
							}
						break;
						case 6:
							if (tabTetris[osum + szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum + 2] != 2 && (fsum + 2)% szer != 1 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2;
								
								zamiana1();
							}
						break;
						case 7:
							if (tabTetris[tsum  + szer + 1] != 2 && tabTetris[thsum - 2] != 2 && tabTetris[ fsum + szer - 1 ] != 2 && (thsum + 2)% szer != 4 ){
								ruch();
								
								zamiana0();
								
								console.log((thsum + 2)% szer);
								
								osum = osum;
								tsum = tsum  + szer + 1;
								thsum = thsum - 2;
								fsum = fsum + szer - 1;
								
								zamiana1();
							}
						break;
					}
					drawGame();
				break;
					
				case "S":
					switch(random){
						case 1: 
							if ( tabTetris[osum - szer - 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[fsum - 2 * szer - 2] != 2 && (osum + szer) % szer != 0 && (fsum - 2 * szer - 2) % szer != 0 && (thsum - szer - 1)%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2 * szer - 2;
								
								zamiana1();
							}
						break;// I	
						case 2:
							if (tabTetris[osum - szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum  + 2] != 2 && (thsum + szer + 1)%szer != 1 ){
							ruch();
								
								zamiana0();
								
								osum = osum - szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2 ;
									
								zamiana1();
							}
						break;
						case 3:
							if (tabTetris[osum - szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum + 2 * szer] != 2 && (osum - szer - 1)%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2 * szer ;
								
								zamiana1();
								
							}
						break;
						case 5:
							if (tabTetris[osum + szer + 1] != 2 && tabTetris[thsum + szer - 1] != 2 && tabTetris[fsum - szer + 1] != 2 && (thsum + szer - 1) < wys * szer ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer + 1;
								tsum = tsum;
								thsum = thsum + szer - 1;
								fsum = fsum - szer + 1;
								
								zamiana1();
							}
						break;
						case 6:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[ fsum - 2 ] != 2 ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer + 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum - 2;
								
								zamiana1();
							}
						break;
						case 7:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[ fsum - 2 ] != 2 ){
								ruch();
								
								zamiana0();
								
								osum = osum;
								tsum = tsum - szer - 1;
								thsum = thsum + 2 ;
								fsum = fsum - szer + 1;
								
								zamiana1();
							}
						break;
					}
					drawGame();
				break;
				case "W":
					switch(random){
						case 1:
							if ( tabTetris[osum - szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum + 2 * szer + 2] != 2 && fsum + 2 * szer + 2 < wys * szer){
								ruch();
								
								zamiana0();
								
								osum = osum - szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2 * szer + 2;
								
								zamiana1();
							}
						break;//I
						case 2:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum + szer - 1] != 2 && tabTetris[fsum + 2 * szer] != 2 && thsum + szer - 1 < szer * wys ){
								ruch();
								
								zamiana0();
								
								osum = osum - szer + 1;
								tsum = tsum;
								thsum = thsum + szer - 1;
								fsum = fsum + 2 * szer;
								
								zamiana1();
							}
						break;
						case 3:
							if (tabTetris[osum - szer + 1] != 2 && tabTetris[thsum + szer - 1] != 2 && tabTetris[ fsum - 2] != 2 && (osum - szer + 1)%szer != 0 ){
								ruch();

								zamiana0();
								
								osum = osum - szer + 1;
								tsum = tsum;
								thsum = thsum + szer - 1;
								fsum = fsum - 2 ;
								
								zamiana1();
								
							}
						break;
						case 5:
							if (tabTetris[osum + szer - 1] != 2 && tabTetris[thsum - szer - 1] != 2 && tabTetris[fsum + szer + 1] != 2 && ( thsum - szer - 1 )%szer != 0 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer - 1;
								tsum = tsum;
								thsum = thsum - szer - 1;
								fsum = fsum + szer + 1;
								
								zamiana1();	
							}
						break;
						case 6:
							if (tabTetris[osum + szer - 1] != 2 && tabTetris[thsum + szer + 1] != 2 && tabTetris[fsum + 2] != 2 && (fsum + 2)% szer != 1 ){
								ruch();
								
								zamiana0();
								
								osum = osum + szer - 1;
								tsum = tsum;
								thsum = thsum + szer + 1;
								fsum = fsum + 2;
								
								zamiana1();
							}
						break;
						case 7:
							if (tabTetris[tsum  + szer + 1] != 2 && tabTetris[thsum - 2] != 2 && tabTetris[ fsum + szer - 1 ] != 2 && (thsum + 2)% szer != 4 ){
								ruch();
								
								zamiana0();
								
								console.log((thsum + 2)% szer);
								
								osum = osum;
								tsum = tsum  + szer + 1;
								thsum = thsum - 2;
								fsum = fsum + szer - 1;
								
								zamiana1();
							}
						break;
					}
					drawGame();
				break;
			}
		break;
		case 39: // Right
			prostaFunkcja();
			
			if(tabTetris[osum] == 2 /*TAK NIE POWINNO BYĆ*/ || tabTetris[osumpjed] == 2 || tabTetris[tsumpjed] == 2 || tabTetris[thsumpjed] == 2 || tabTetris[fsumpjed] == 2 || osum % szer == 0 || tsum % szer == 0 || thsum % szer == 0 || fsum % szer == 0) {
				
			} else {
				tabTetris[osum] = 0;
				tabTetris[tsum] = 0;
				tabTetris[thsum] = 0;
				tabTetris[fsum] = 0;
				
				tabTetris[osum + 1] = 1;
				tabTetris[tsum + 1] = 1;
				tabTetris[thsum + 1] = 1;
				tabTetris[fsum + 1] = 1;
				
				osum++;
				tsum++;
				thsum++;
				fsum++;
				
				drawGame();
			}
		break;
		case 40: // Down
			ruchDol();
		break;
		
		case 13: // Enter
			tabTetris[osum] = 2;
			tabTetris[tsum] = 2;
			tabTetris[thsum] = 2;
			tabTetris[fsum] = 2;
			sprawdzCzy();
			drawGame();
			
			wyborFigury();
			Figury(random);
		break;
	}
}, false);