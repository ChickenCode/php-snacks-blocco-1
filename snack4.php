<?php
    $myNumbers = [];

   

    while (count($myNumbers) < 15) {
        $casualNumber = rand(1, 100);

    
        if (in_array($casualNumber, $myNumbers) == false) {
            $myNumbers[] = $casualNumber;
        }
    }

    
    for ($i=0; $i < count($myNumbers) -1; $i++) {
        echo $myNumbers[$i] . ", ";
    }

    echo $myNumbers[count($myNumbers) -1] . "."
?>
