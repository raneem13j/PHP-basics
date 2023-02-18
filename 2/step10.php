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
     function palindrome($string){
        $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));

        $opposit = strrev($string);

        if($string === $opposit){
              return 1;
        }else{
            return 0;
        }
      }
      echo palindrome("/lj;lgkjljf");
    ?>
</body>
</html>