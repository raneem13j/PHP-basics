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


    $var1 = 32;
    $var2 = 45;

    // swapping variables
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;

    echo "After swapping, var1 = " . $var1 . "<br>";
    echo "After swapping, var2 = " . $var2;



    $result = 10 / 0;

    ?>
</body>

</html>