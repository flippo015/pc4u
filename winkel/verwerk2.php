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

        <h1>inloggen</h1>
			<!--  menu -->
<?php
include ('menu.php');
?><br>

<?php

include  'database.php';

//variabelen
$Email = filter($_POST ["Email"]);
$Wachtwoord = filter($_POST ["Wachtwoord"]);

//echo $Email;

//selecteerd email
$query="SELECT * FROM klanten WHERE Email='$Email' " ;
$result=mysql_query($query);

//kijkt of email bestaat
if (mysql_num_rows($result) ==0) {
    header('Refresh:3 ; URL=aanmelden.php');
    echo "emailadres niet gevonden<br> probeer opnieuw<br>";
}

while ($row=  mysql_fetch_array($result)) {

//als wachtwoord en email klopt dan ben je ingelogd  
    if ($Email ==$row ['Email'] and $Wachtwoord ==$row ['Wachtwoord']) {
              header('Refresh:3 ; URL=index.php');  
        echo "U bent ingelogd, u wordt doorverwezen naar de homepagina" ;
        break;
        }
    
            else {
                header('Refresh:3 ; URL=aanmelden.php');
                echo "uw emailadres en wachtwoord komen niet overeen";
                }
}

//start sessie
$_SESSION['Email']=$row ['Email'];
$_SESSION['Wachtwoord']=$row ['Wachtwoord'];

        //echo '<pre>' ;
        //var_dump ($_SESSION);
        //echo '</pre>';

mysql_close($link);

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