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

      function squareRoot ($num){
          $root= sqrt($num);

          return $root;
      }
       
      $num= 36;
      $result= squareRoot($num);
      echo $result;
    ?>
</body>
</html>