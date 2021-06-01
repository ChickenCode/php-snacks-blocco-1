<?php
    $partite = [
        [
            "casa" => "Codigoro",
            "ospite" => "Casalpusterlengo",
            "puntiCasa" => "54",
            "puntiOspite" => "48"
        ],
        
        [
            "casa" => "Ferrara",
            "ospite" => "Lecce",
            "puntiCasa" => "84",
            "puntiOspite" => "95"
        ],

        [
            "casa" => "Torino",
            "ospite" => "Firenze",
            "puntiCasa" => "75",
            "puntiOspite" => "33"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for($i =0; $i < count($partite); $i++)  { 
    ?>

            <p>
                <?php echo $partite[$i]["casa"] . " - " . $partite[$i]["ospite"] . " | " . $partite[$i]["puntiCasa"] . " - " . $partite[$i]["puntiOspite"]    ?>
            </p>

    <?php
        }
    ?>
</body>
</html>