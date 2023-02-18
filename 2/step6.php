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
    
    $num = '678';
    $sum = 0;
    
    for ($i = 0; $i < strlen($num); $i++) {
      $sum += $num[$i];
    }
    
    echo "The sum of the digits of $num is: $sum";
    
    
    
    ?>
</body>
</html>