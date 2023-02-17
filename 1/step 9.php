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
    
     $name = "Raneem";
     $age = 30;
     
     var_dump($name, $age);
    //  die("execution stopped.");
    //  var_dump($age);

     $result = 10 / 0;
    
    ?>
</body>
</html>