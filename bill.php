<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculate Electricity Bill</title>
</head>
<body>
    
<?php

function calculate_bill($units){
    $first_cost = 3.50;
    $second_cost = 4.50;
    $third_cost = 5.30;
    $fourth_cost = 6.50;

     if ($units <= 50){
        echo $bill = $units * $first_cost;
     }

     elseif($units > 50 && $units <= 100){
        $temp = 50 * $first_cost;
        $remaining = $units - 50;
        $remainingAmount = $remaining * $second_cost;
        echo  $bill = $temp + $remainingAmount;
     }

     elseif($units>100 && $units <= 200 ){
        $temp = 50 * $first_cost; 
        $secondRemaning = 100 * $second_cost;
        $remaningUnit = $units - 150;
        $remainingAmount = $remaningUnit * $third_cost;
        echo $bill = $temp + $secondRemaning + $remainingAmount;
     }

     else{
        $temp = (50 * $first_cost) + (100 * $second_cost) + (100 * $third_cost);
        $remaining = $units - 250;
        echo $bill = $temp + ($remaining * $fourth_cost);
     }
     }
calculate_bill(290);
?>
</body>
</html>