<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Week Day</title>
</head>
<body>
    
<?php

$day = ("4");

switch ($day)   {
    case "1":
        echo "Monday";
        

        case "2":
            echo"Tuesday";
            

            case "3":
            echo "Wednesday";
            
            
            case "4":
            echo "Thursday";
            

            case "5":
            echo "Friday";
            

            case "6":
                echo "Saturday";
                

                case "7":
                echo "Sundady";
                
                
                default:
                echo "Invalid days";
    
}

?>

</body>
</html>