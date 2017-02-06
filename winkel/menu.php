
<?php

//filter de data die binnen komt
function filter ($security) {
    $security = trim($security);
    $security = stripslashes($security);
    $security = strip_tags($security);
    $security = htmlspecialchars($security);
    $security = mysql_real_escape_string($security);
    return $security;
}

session_start();
include('database.php');

echo
		'<ul id="navmenu">
					
			<li><a href="aanmelden.php">Aanmelden</a><span class="darrow">&#9660;</span>
				<ul class="sub1">
					<li><a href="registratie.php">Registreren</a></li>
					<li><a href="leden.php">Account wijzigen</a></li>
                                        <li><a href="uitloggen.php">uitloggen</a></li>
				</ul>
			</li>
				<li><a href="info.php">Info/Contact</a>
			</li>
			<li><a href="shop.php">Shop</a><span class="darrow">&#9660;</span>
				<ul class="sub1">
					<li><a href="computer.php">PC´s</a>
					</li>				
				</ul>
			</li>
			<li><a href="index.php">Home</a></li>
		</ul>';
		
echo "goedendag {$_SESSION['Email']}<br><br>";
                        
                        ?>
