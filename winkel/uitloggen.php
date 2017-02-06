<!DOCTYPE html>


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

        <h1>Uitlogpagina</h1>
			<!--  menu -->
<?php
include ('menu.php');
?><br>





<?php

session_start();
unset ($_SESSION['Email']);
session_destroy();
echo 'u bent uitgelogd';
header("Refresh:3 ;  URL=aanmelden.php");
?>


			<footer class="main-voet">
				<span> 	klantenservice: 0800 - 1234 (gratis) 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Technische dienst: 0900 - 2345 (0.70 cpm)
				</span>
			<img src="pictures/logo-thuiswinkel-waarborg-head.png" alt="Thuiswinkel waarborg" />
			</footer>
			<br><Br><br><br>
	</body>

</html>