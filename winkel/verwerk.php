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

                			<h1>Registreren</h1>
			<!--  menu -->
<?php

include ('menu.php');  




include  'database.php';
//variabelen

$Voornaam = filter($_POST ["Voornaam"]);
$Achternaam = filter($_POST ["Achternaam"]);
$Email = filter($_POST ["Email"]);
$Wachtwoord = filter($_POST ["Wachtwoord"]);
$Herhaal_Wachtwoord = ["Herhaal_Wachtwoord"];
$Straatnaam = filter($_POST ["Straatnaam"]);
$Huisnummer = filter($_POST ["Huisnummer"]);
$Postcode = filter($_POST ["Postcode"]);
$Woonplaats = filter($_POST ["Woonplaats"]);
$Telefoonnummer= filter($_POST ["Telefoonnummer"]);
$message = $Voornaam . $Achternaam . ' u bent geregistreerd, tot ziens';
$subject = 'Registratie gelukt';  
$headers = 'From: NoReply@pc4u.com';

//kijkt of record bestaat
            $sql = "SELECT * FROM klanten WHERE Email='$Email'";
            $result = mysql_query($sql) or die(mysql_error());
            $num_rows = mysql_num_rows($result);
            
//als records bestaat dan word het niet gemaakt            
            if ( $num_rows > 0 ) {
                header('Refresh:3 ; URL=registratie.php');
                echo "E-mail adres $Email bestaat al, probeer opnieuw.<br>";
            }
            
// is alles goed, dan wordt de record doorgezet naar database en wordt er een email verstuurd            
            else { 

                mysql_query("INSERT INTO klanten VALUES ('', '$Voornaam', '$Achternaam', '$Email', '$Wachtwoord', '$Straatnaam', '$Huisnummer', '$Postcode', '$Woonplaats', '$Telefoonnummer')");
                echo $Email;
                mail($Email, $subject, $message, $headers);

                header('Refresh:3 ; URL=aanmelden.php');
                echo "aanmelden succesvol <br>u wordt doorverwezen naar aanmelden...<br>";
                        
 }
         
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


                
