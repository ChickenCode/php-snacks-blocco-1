<?php
    $posts = [
        [
            "date" => "01/08/1995",
            "content" => [
                [
                    "title" => "Post 1",
                    "author" => "Gino Pinguino",
                    "text" => "lorem ipsum"
                ],

                [
                    "title" => "Post 2",
                    "author" => "Manny Giraffa",
                    "text" => "Ho il torcicollo"
                ]
                
            ],
        ],

        [
            "date" => "01/09/1995",
            "content" => [
                [
                    "title" => "Post 3",
                    "author" => "Jack Elefant",
                    "text" => "Il banano è un albero strano"
                ],

                [
                    "title" => "Post 4",
                    "author" => "Patty Foca",
                    "text" => "La pizza è buona"
                ]
                
            ],
        ],

        [
            "date" => "01/10/1995",
            "content" => [
                [
                    "title" => "Post 5",
                    "author" => "Armando Armadillo",
                    "text" => "Essere un armadillo non è facile come sembra"
                ],

                [
                    "title" => "Post 6",
                    "author" => "Alessandro Gufo",
                    "text" => "Soffro di insonnia"
                ]
                
            ],
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
        for ($i=0; $i < count($posts); $i++) {
    ?>
        
            <p> <?php echo $posts[$i]["date"] ?> </p>
            <ul>
            <?php
                for($y=0; $y < count($posts[$i]["content"]); $y++) {
            ?>

                    <li><?php echo $posts[$i]["content"][$y]["title"] ?></li>
                    <li><?php echo $posts[$i]["content"][$y]["author"] ?></li>
                    <li><?php echo $posts[$i]["content"][$y]["text"] ?></li>
                    <br>

            <?php
                }
            ?>
            </ul>
    <?php
        }
    ?>
</body>
</html>