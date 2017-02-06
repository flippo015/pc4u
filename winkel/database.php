<?php

session_start();

    $dbname = 'computerwinkel' ;
    $link = mysql_connect('localhost','root', 'hilversum' );
    if (!$link) {
        die ('kan geen verbinding maken' . mysql_error());
    }
    
    // verbinding met database
    $db_selected = mysql_select_db ($dbname, $link);
    if (!$db_selected) {
        die ( 'kan geen verbinding maken' . mysql_error());
    }
    
    ?>