<?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    $mail = $_GET["mail"];
    
    
    $verifyName = strlen($name) > 3;
    $verifyAge = is_numeric($age);
    $verifyMail = strpos($mail, "@") && strpos($mail, ".");
    

    if ($verifyName && $verifyAge && $verifyMail) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>