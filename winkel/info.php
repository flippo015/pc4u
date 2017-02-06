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
                        <h1>info</h1>                        
<?php
include ('menu.php');
?>
		
<form action="MAILTO:robby.vdl@outlook.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" required><br>
E-mail:<br>
<input type="text" name="mail"required><br>
Comment:<br>
<input type="text" name="comment" value="your comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>		
		<br>
		
		
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