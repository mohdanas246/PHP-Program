<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap year or not</title>
</head>
<body>
    

<?php

function leepYear($year){
// if($year % 400 == 0){
//     echo $year . " Is a leap year";
// } 
// elseif($year % 100 == 0){
//     echo $year. " Is not a leap year";
// }
if($year % 4 == 0){
    echo $year. " Is a leap year";
}
else{
    echo $year. " Is not a leap year" ;   
}
}

$year = 2000;
echo $year % 400 == 0;
echo "<br>";
echo $year % 100 == 0;
echo "<br>";
echo $year % 4 == 0;
echo "<br>";
leepYear(2004);
?>

</body>
</html>