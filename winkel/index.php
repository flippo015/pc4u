<!DOCTYPE html>
<?php

session_start();

?>
<html>
    
    <head>
        
        <title>PC 4 U webshop</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="styles.css" rel="stylesheet" type="text/css">
        
    </head>
	
	
		<body>
		
			<img class="logo"  src="pictures/logo.png" />
		<br>
			<h1>Homepagina</h1>
			<!--  menu -->
<?php
include ('menu.php');
?>
		
		<br>

			<div class="simpel">
			
			<table class="box">
                            
				<tr><td>
					<a href="shop.php"><!-- shop.php-->
					<img src= "pictures/foto1.jpg" height="175" width="175" border="0" alt="online shop"><br>
					</a>
                                    </td>
                                        
				<td>
					<a href="computer.php">
					<img src= "pictures/foto2.jpg" height="175" width="175" border="0" alt="computers"><br>
					</a></td>
                                        
				<td>
					<a href="onderdelen.php">
					<img src= "pictures/foto3.jpg" height="175" width="175" border="0" alt="onderdelen"><br>
					</a></td>
			</table>
			
			<table class="box">
				<tr><td>
					<a href="reparatie.php">
					<img src= "pictures/foto4.jpg" height="175" width="175" border="0" alt="reparatie"><br>
					</a></td>
				<td>
					<a href="info.php">
					<img src= "pictures/foto8.jpg" height="175" width="175" border="0" alt="info"><br>
					</a></td>
				<td>
					<a href="acties.php">
					<img src= "pictures/foto7.jpg" height="175" width="175" border="0" alt="reclame"><br>
					</a></td>
			</table>
			
			</div>
				<footer class="main-voet">
					<span> 	klantenservice: 0800 - 1234 (gratis) 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Technische dienst: 0900 - 2345 (0.70 cpm)
					</span>
				<img src="pictures/logo-thuiswinkel-waarborg-head.png" alt="Thuiswinkel waarborg" />
				</footer>
				<br><Br><br><br>
                                
                                
                                
                <script>


var days = 730; // days until cookie expires = 2 years.
var lastvisit=new Object();
var firstvisitmsg="Dit is uw eerste bezoek op de website. Welkom!"; 
lastvisit.subsequentvisitmsg="Welkom terug! Uw laatste bezoek was op [displaydate]";

lastvisit.getCookie=function(Name){ 
var re=new RegExp(Name+"=[^;]+", "i"); 
if (document.cookie.match(re)) 
return document.cookie.match(re)[0].split("=")[1];
return''; 
}

lastvisit.setCookie=function(name, value, days){ 
var expireDate = new Date();

var expstring=expireDate.setDate(expireDate.getDate()+parseInt(days));
document.cookie = name+"="+value+"; expires="+expireDate.toGMTString()+"; path=/";
}

lastvisit.showmessage = function() {
var wh = new Date();
if (lastvisit.getCookie("visitc") == "") { 
lastvisit.setCookie("visitc", wh, days); 
alert(firstvisitmsg);
}

else {
var lv = lastvisit.getCookie("visitc");
var lvp = Date.parse(lv);
var now = new Date();
now.setTime(lvp);
var day = new Array("zo", "ma", "di", "wo", "do", "vr", "za");
var month = new Array ("Jan", "Feb", "Mrt", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
var dd = now.getDate();
var dy = now.getDay();
dy = day[dy];
var mn = now.getMonth();
mn = month[mn];
yy = now.getFullYear();
var hh = now.getHours();
var ampm = "AM";
if (hh >= 12) {ampm = "PM"}
if (hh >12){hh = hh - 12};
if (hh == 0) {hh = 12}
if (hh < 10) {hh = "0" + hh};
var mins = now.getMinutes();
if (mins < 10) {mins = "0"+ mins}
var secs = now.getSeconds();
if (secs < 10) {secs = "0" + secs}
var dispDate = dy + ", " + mn + " " + dd + ", " + yy + " " + hh + ":" + mins + ":" + secs + " " + ampm
alert(lastvisit.subsequentvisitmsg.replace("\[displaydate\]", dispDate))
}

lastvisit.setCookie("visitc", wh, days);

}

lastvisit.showmessage();

</script>


		<?php
mysql_close($link);

?>
                </body>

	</html>