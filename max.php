<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAximum no</title>
</head>
<body>
    
<?php

function largeNo($num1, $num2, $num3) {
   
  
    if ($num1 >= $num2 && $num1 >= $num3) {
      $max = $num1;
      echo "passed2";
    }
     
    if ($num2 >= $num1 && $num2 >= $num3)
      $max = $num2;
      echo "passed1";
    if ($num3 >= $num1 && $num3 >= $num2)
      $max = $num3;
      echo "passed5";
    
    echo "the max number is $max" ;
    
  }

 largeNo(2324235345,26666,12334);

  ?>


</body>
</html>;







