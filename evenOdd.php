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

    $i = 0;
    while ($i <= 10) {
        if ($i % 2 == 0) {
            echo $i . " this is  Even, <br> ";
        } else {
            echo $i . " this is Odd,  ";
        }
        $i++;
    }


    ?>


</body>

</html>