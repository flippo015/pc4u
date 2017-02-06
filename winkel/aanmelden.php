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
<style>
 label{
  width:150px;
  float:left;
 }
</style>
<script>
    
    var count = 0;
    function checkEmail() {
    var message0 = document.getElementById('message');// haalt SPAN op en slaat op als record
    var email = document.getElementById('Email'); // haalt record op en slaat op als variable
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/; // hier wordt gecheckt of de records correct zijn ingevuld

   //hier staat als de test terug komt moet dingen die niet in de filter staat dan voer iets geldig in
    if (!filter.test(email.value)) {// als er dingen in komen die niet gelijk zijn aan filter dan returnt ie false anders true
    message0.innerHTML = "veld voldoet NIET aan de eisen";// laat bericht zien in span
    email.focus;// hier wordt gelet als de muis of met die toetsenbord weg gaat van veld
    return false;
    }
        else{
            message0.innerHTML = "veld voldoet aan de eisen";
            count = count+1;
        }
}

function checkps1() {

    var message = document.getElementById('message10');// haalt SPAN op en slaat op als record
    var ww = document.getElementById('Wachtwoord'); // haalt record op en slaat op als variable
    var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;// er staat dat er minsten 1 kleine, 1 hoof letter en 1 cijfer in voor mag komen 

    if (!filter.test(ww.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen mininaal 7 karakters, geen speciale tekens";
    ww.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function validateForm() {

                if (count < 2 ){
                alert("Velden mogen niet LEEG zijn of moet correct ingevuld worden");
                return false;
                }
                    else {
                    window.location.href= 'verwerk2.php';
                    }
}
    
    </script>





    </head>
    
		<body>
			<img class="logo"  src="pictures/logo.png" />
		<br>

                			<h1>Aanmelden & Registreren</h1>
			<!--  menu -->
<?php
include ('menu.php');
?>
                
                <form name="register" action="verwerk2.php" method="POST">

                    <p><label for="Email"> Email</label>
                        <input type="text" name="Email" id="Email" size="30" onblur="checkEmail()" required placeholder="Vul hier uw e-mailadres in*"/><span id="message" class="message"></span></p>
                    <p><label for="Wachtwoord">wachtwoord</label>
                        <input type="password" name="Wachtwoord" id="Wachtwoord" size="30"   onblur="checkps1()" <input type="password" name="Wachtwoord" id="Wachtwoord" size="30"  required placeholder="Vul hier uw wachtwoord in*"/><span id="message10" class="message10"></span></p>

                    <p><input type="submit" name="inloggen" onclick="validateForm()" /></p><br>
                  
                </form> 
                
		
		
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