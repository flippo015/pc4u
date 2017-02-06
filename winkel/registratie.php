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
  width:250px;
  float:left;
 }
</style>
    </head>
    
		<body>
			<img class="logo"  src="pictures/logo.png" />
		<br>

                			<h1> Registreren</h1>
			<!--  menu -->
                  
<?php
include ('menu.php');
?><br>

                <form name="register"  action="verwerk.php" method="POST">

                    <p><label for="Voornaam"> voornaam</label>
                        <input type="text" name="Voornaam" id="voornaam" size="30"  onblur="checkVoornaam()"  required placeholder="Vul hier uw voornaam in*"/><span id="message1" class="message1"></span></p>
                    
                    
                    <p><label for="Achternaam"> Achternaam en Tussenvoegsel</label>
                        <input type="text" name="Achternaam" id="achternaam" size="30" onblur="checkachternaam()" required placeholder="Vul hier uw tussenvoegsel & achternaam in*"/><span id="message2" class="message2"></span></p>
                        
                    
                    <p><label for="Email">E-mail</label>
                        <input type="text" name="Email" id="Email" size="30" onblur="checkEmail()" required placeholder="Vul hier uw e-mailadres in*"/><span id="message" class="message"></span></p>
                        
                    
                    <p><label for="Wachtwoord">wachtwoord:</label>
                        <input name="Wachtwoord" id="Wachtwoord" size="30" type="password" onblur="checkps1()"required placeholder="minstens 1 hoofdletter, 1 kleine letter, 1 nummer *"><span id="message10" class="message10"></span></p>
                   
                    <p>  <label for="Herhaal_Wachtwoord">Confirm Password:</label>
                        <input name="Herhaal_Wachtwoord" type="password" id="Herhaal_Wachtwoord" size="30" onblur="checkPass(); return false;" required placeholder="Vul hier herhaalde wachtwoord in*"/><span id="confirmMessage" class="confirmMessage"></span></p>
                    
                    
                    <p><label for="Straatnaam">straatnaam</label>
                        <input type="text" name="Straatnaam" id="Straatnaam" size="30" onblur="checkStraat()" required placeholder="Vul hier uw straat in*"/><span id="message3" class="message3"></span></p>
    
                    
                    <p><label for="Huisnummer">huisnummer</label>
                        <input type="text" name="Huisnummer" id="Huisnummer" size="30" onblur="checkSn()" required placeholder="Vul hier uw huisnummer in*"/><span id="message4" class="message4"></span></p>
 
                    
                    <p><label for="Postcode">postcode</label>
                        <input type="text" name="Postcode" id="postcode" size="30"  onblur="checkPS()"required placeholder="Vul hier uw postcode in*"/><span id="message5" class="message5"></span></p>
     
                    
                    <p><label for="Woonplaats">Woonplaats</label>
                        <input type="text" name="Woonplaats" id="Woonplaats" size="30" onblur="checkWP()" required placeholder="Vul hier uw woonplaats in*"/><span id="message6" class="message6"></span></p>
   
                    
                    <p><label for="Telefoonnummer">Telefoonnummer</label>
                        <input type="text" name="Telefoonnummer" id="telefoonnummer" size ="30" onblur="checkTel()" required placeholder="Vul hier uw telefoonnummer*"/><span id="message7" class="message7"></span></p>

                    
                    <input type="submit" name="Registreren" onclick="validateForm()" />
                </form> 
		
		
			<footer class="main-voet">
				<span> 	klantenservice: 0800 - 1234 (gratis) 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Technische dienst: 0900 - 2345 (0.70 cpm)
				</span>
			<img src="pictures/logo-thuiswinkel-waarborg-head.png" alt="Thuiswinkel waarborg" />
			</footer>
			<br><Br><br><br>
                        
                        
<script>

var count = 0;// zet count naar 0

function checkVoornaam() {// functie 
    var message = document.getElementById('message1');// haalt het veld span op en slaat op als records
    var voornaam = document.getElementById('voornaam');// haalt records op van het veld en slaat op als een variable
    var filter = /^[a-zA-Z ]+$/;// filter > er mag a tot en met z in komen zowel als hoofdletters en spaties

    if (!filter.test(voornaam.value)) {// test of input niet zelfde is als filter, zo niet dan returned ie false
    message.innerHTML = "veld voldoet NIET aan de eisen";// hier laat ie een bericht zien in de span area
    voornaam.focus;// kijkt of de cursor weg gaat van veld
    return false;// hier mee wordt bedoelt dat het fout is dus niet verder gaat
    }// einde if functie
        else {// als het wel goed is kom je hier
        message.innerHTML = "veld voldoet aan de eisen"; // hier laat ie een bericht zien in de span area
        count = count+1;// count wordt opgeteld als het veld voldoet aan de eisen
        }//einde else functie
}//einde functie

//   BELANGRIJK omdat de volgende functies hetzelfde zijn als de eerste gelden de comment ook voor de volgende functies.!!!

function checkachternaam() {
    var message = document.getElementById('message2');
    var achternaam = document.getElementById('achternaam');
    var filter = /^[a-zA-Z ]+$/;

    if (!filter.test(achternaam.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    achternaam.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkEmail() {
    var message0 = document.getElementById('message');
    var email = document.getElementById('Email'); 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/;// a tot en met z, hoofdletters etc

 
    if (!filter.test(email.value)) {
    message0.innerHTML = "veld voldoet NIET aan de eisen";
    email.focus;
    return false;
    }
        else{
            message0.innerHTML = "veld voldoet aan de eisen";
            count = count+1;
        }
}

function checkStraat() {

    var message = document.getElementById('message3');
    var straat = document.getElementById('Straatnaam'); 
    var filter = /^([a-zA-Z0-9,#.-]+)/;

    if (!filter.test(straat.value)) {
  message.innerHTML = "veld voldoet NIET aan de eisen";
    straat.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkSn() {

    var message = document.getElementById('message4');
    var straat = document.getElementById('Huisnummer'); 
    var filter = /^([a-zA-Z0-9,#.-]+)/;

    if (!filter.test(straat.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    straat.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkPS() {

    var message = document.getElementById('message5');
    var ps = document.getElementById('postcode');
    var filter = /^([1-9][0-9]{3}\s?[a-zA-Z]{2})/;

    if (!filter.test(ps.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    ps.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkWP() {

    var message = document.getElementById('message6');
    var WP = document.getElementById('Woonplaats');
    var filter = /^([a-zA-Z\-']+)/;

    if (!filter.test(WP.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    WP.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkTel() {

    var message = document.getElementById('message7');
    var tel = document.getElementById('telefoonnummer');
    var filter = /^(\d{3}\d{3}\d{4})/;

    if (!filter.test(tel.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    tel.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}

function checkps1() {

    var message = document.getElementById('message10');
    var tel = document.getElementById('Wachtwoord');
    var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;

    if (!filter.test(tel.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen mininaal 7 karakters, geen speciale tekens";
    tel.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}


// global var
var pass1 = document.getElementById('Wachtwoord');
var pass2 = document.getElementById('Herhaal_Wachtwoord');   



// functie checkt terplekke of ww1 en ww2 overeenkomen
function checkPass(){

    var message = document.getElementById('confirmMessage');// haalt span op
    var goodColor = "#66cc66";// kleur groen
    var badColor = "#ff6666";// kleur rood
    //checkt of ww1 en ww2 gelijk zijn
    if(pass1.value == pass2.value){// als ww1 gelijk is aan ww2 
    pass2.style.backgroundColor = goodColor;//laat een groene kleur zien
    message.style.color = goodColor;
    message.innerHTML = "Passwords Match!"; // in de span komt een bericht        
    count = count+1;// count wordt opgeteld
    }
        else{// als ww1 niet gelijk is aan ww2
        pass2.style.backgroundColor = badColor;// laat een rode kleur zien
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!";// in de span komt een bericht
        }
} 



function validateForm() {

                if (count < 10 ){// kijkt of elk veld een +1 heeft gegeven
                alert("Velden mogen niet LEEG zijn of moet correct ingevuld worden");
                return false;// als het kleiner dan tien is dan gaat ie niet verder
                }
                    else {
                    window.location.href= 'verwerk.php';// als het tien of groter is dan gaat ie verder
                    }
}
    </script>
    

<?php
mysql_close($link);

?>
</body>

</html>