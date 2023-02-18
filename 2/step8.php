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
    
    function powerOfTwo($num){

      if($num < 1){
         return false;
      }
       While($num > 1){
             if($num % 2 != 0){
               return false;
             }
             $num /= 2;
       }
       return true;
    }

    $num= 16;
    if(powerOfTwo($num)){
       echo "$num is a power of two";
    }else {
        echo "$num is not a power of two";
    }

    ?>
</body>
</html>