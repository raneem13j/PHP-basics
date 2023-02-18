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
   $x = 1;
   while($x <= 8){
      $z=1;
      while($z <= $x){
            echo "*";
            $z++;
      }
      echo "<br>";
         $x++;
   }
    
    
    
    ?>
</body>
</html>