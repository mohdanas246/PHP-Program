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

    $student = array(
        array("Anas", 22),
        array("Ravi", 27),
        array("Hari", 21)
    );

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $student[$i] [$j] ;
            echo "</br>";
        }
    }
    ?>
</body>
</html>