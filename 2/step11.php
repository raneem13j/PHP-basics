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
    
    function isPrime($num){
        if($num < 2){
           return false;
        }

        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                 return false;
            }
        }
        return true;

    }

    $num = "8";
    if (isPrime($num)) {
        echo "$num is prime";
    } else {
        echo "$num is not prime";
    }
    

    ?>
</body>
</html>