<html>
    <head>
        <title>PC 4 U webshop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" type="text/css">     
                <style>
            table {
              width:50px;
              height: 50px;
            }

        </style>  
        
        <script>
var count = 0;

function checkVoornaam() {
    var message = document.getElementById('message1');
    var voornaam = document.getElementById('voornaam');
    var filter = /^[a-zA-Z ]+$/;

    if (!filter.test(voornaam.value)) {
    message.innerHTML = "veld voldoet NIET aan de eisen";
    voornaam.focus;
    return false;
    }
        else {
        message.innerHTML = "veld voldoet aan de eisen";
        count = count+1;
        }
}            





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
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/;

 
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

function validateForm() {// omdat wij maar 1 veld hoeven te wijzigen is het kleiner dan 1

                if (count < 1 ){// kijk of count kleiner is dan een zo ja dan is het false
                alert("Velden mogen niet LEEG zijn of moet correct ingevuld worden");
                return false;
                }
                    else {
                        document.getElementById("register").submit();
                        //window.location.href= 'leden.php';
                    }
}       
        
        
        
        
        

            
        
        </script>
    </head>

    <body>
        <img class="logo"  src="pictures/logo.png" />
        <br>

        <h1>Account wijzigen</h1>
        <!--  menu -->
<?php
include ('menu.php');
include ('database.php');
session_start();

//functie update button
if (isset($_POST['Voornaam'])) {

//variabelen   
    $Voornaam=filter($_POST['Voornaam']);
    $Achternaam=filter($_POST['Achternaam']);
    $Email=filter($_POST['Email']);
    $Wachtwoord=filter($_POST['Wachtwoord']);
    $Straatnaam=filter($_POST['Straatnaam']);
    $Huisnummer=filter($_POST['Huisnummer']);
    $Postcode=filter($_POST['Postcode']);
    $Woonplaats=filter($_POST['Woonplaats']);
    $Telefoonnummer=filter($_POST['Telefoonnummer']);
    $zoek=$_SESSION['Email'];

    $updatequery = "UPDATE klanten SET Voornaam='$Voornaam', Achternaam='$Achternaam', Email='$Email', Wachtwoord='$Wachtwoord', Straatnaam='$Straatnaam', Huisnummer='$Huisnummer', Postcode='$Postcode', Woonplaats='$Woonplaats', Telefoonnummer='$Telefoonnummer' WHERE Email= '$zoek'";
    mysql_query($updatequery);

    echo "update succesfull";
}


//selecteerd gegevens database
$sql = "SELECT * FROM klanten WHERE Email= '{$_SESSION['Email']}'";
$result = mysql_query($sql, $link);

//tabel met gegevens
echo "<table>";
while ($record = mysql_fetch_array($result)) {
    echo "<form name=register id='register' action=leden.php method=post>";
    echo"<tr>";
    echo"<td>" . "voornaam<input type=text name=Voornaam id=voornaam onblur=checkVoornaam() value=" . $record['Voornaam'] . " </td> <span id=message1 class=message1></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "achternaam<input type=text name=Achternaam id=achternaam onblur=checkachternaam() value=" . $record['Achternaam'] . " </td> <span id=message2 class=message2></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "email<input type=email name=Email id=Email onblur=checkEmail() value=" . $record['Email'] . " </td> <span id=message class=message></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "wachtwoord<input type=password name=Wachtwoord id=Wachtwoord onblur=checkps1() value=" . $record['Wachtwoord'] . " </td> <span id=message10 class=message10></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "straatnaam<input type=text name=Straatnaam id=Straatnaam onblur=checkStraat() value=" . $record['Straatnaam'] . " </td> <span id=message3 class=message3></span>";
    echo"</tr>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "huisnummer<input type=text name=Huisnummer id=Huisnummer onblur=checkSn() value=" . $record['Huisnummer'] . " </td> <span id=message4 class=message4></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "postcode<input type=text name=Postcode id=postcode onblur=checkPS() value=" . $record['Postcode'] . " </td> <span id=message5 class=message5></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "woonplaats<input type=text name=Woonplaats id=Woonplaats onblur=checkWP() value=" . $record['Woonplaats'] . " </td> <span id=message6 class=message6></span>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>" . "telefoonnummer<input type=text name=Telefoonnummer id=Woonplaats onblur=checkWP() value=" . $record['Telefoonnummer'] . " </td> <span id=message6 class=message6></span>";
    echo"</tr>";
    echo"<tr>";
    echo "<td>" . "<input type=button name=update value=wijzig onclick=validateForm()>" . " </td>";
    echo"</tr>";
    echo "</form>";
}
echo "</table>";
//mysql_close($link);
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
