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

			<!--  menu -->
                        <h1>Shop</h1>                        
<?php
include ('menu.php');
?>

		<!--webshop-->
		
		<br>
			<div class="simpel">
			
			<table class="box">
				<tr><td>
					<a href="#">
					<img src= "pictures/webshop/laptopentablets.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>laptop en tablets</p>
					</a></td>
				<td>
					<a href="#">
					<img src= "pictures/webshop/mac.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>Apple</p>
					</a></td>
				<td>
					<a href="#">
					<img src= "pictures/webshop/Monitoren.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>monitoren</p>
					</a></td>
			</table>
			
			<table class="box">
				<tr><td>
					<a href="#">
					<img src= "pictures/webshop/onderdelen.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>onderdelen</p>
					</a></td>
				<td>
					<a href="#">
					<img src= "pictures/webshop/pcsystemen.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>pc systemen</p>
					</a></td>
				<td>
					<a href="#">
					<img src= "pictures/webshop/printerenscanners.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>printers en scanners </p>
					</a></td>
			</table>
			<table class="box">
				<tr><td>
					<a href="#">
					<img src= "pictures/webshop/videokaart.png" height="150" width="150" border="0" alt="online shop"><br>
					<p>videokaarten</p>
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
	<?php
mysql_close($link);

?>
                </body>

</html>