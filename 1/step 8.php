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
     error_reporting(E_ALL);
     ini_set('display_errors', 0);
     ini_set('log_errors', 1);
     ini_set('error_log', '/var/log/php-errors.log');
    
    $grocery= array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
     echo"Hello Sir, do you have $grocery[0], $grocery[1], and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?<br>";
    
    $groc = array (
        array("eggs","balade","mazere3"),
        array("milk","Fresh","Taanayel"),
        array("water pack","Tanoureen","Reem")
      ); 
     echo"Hey Sir, Please I need 1 pack of " .$groc[0][1]. " " .$groc[0][0]. " and 3 " .$groc[2][2]." " .$groc[2][0];
     
     $result = 10 / 0;
    
    ?>
</body>
</html>