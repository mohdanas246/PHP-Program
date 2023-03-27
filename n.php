<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Number </title>
</head>
<body>
    
<?php

$n = 10;
$i = 1;
$sum = 0;

while($i <= $n){
    $sum = $sum + $i;
    $i++; 
}

echo "The sum of number :  $sum";

?>

</body>
</html>