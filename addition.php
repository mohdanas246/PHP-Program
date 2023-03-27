<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition of some number </title>
</head>
<body>
    
<?php

$number = 4567;
$sum = 0;

for($i = 0; $i <= strlen($number); $i++){

    $sum = $sum + $number % 10;
    $number /= 10;

}

echo "The sum of total  no is $sum";
?>


</body>
</html>