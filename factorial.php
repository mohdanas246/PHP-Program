 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anyb number of factorial</title>
</head>
<body>
    
<?php

$num = 3;
$factorial = 1;

for($i = $num; $i >= 1; $i--){
    
    $factorial = $factorial * $i;
}

echo " the factorial of $num is =  $factorial";





?>
</body>
</html>