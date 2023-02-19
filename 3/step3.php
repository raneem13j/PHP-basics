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
   
        
    function countWord ($text, $word){
     $words = explode(" ",$text);
     $count =0;
     $index = 0;
     while ($index < count($words)){
           if($words[$index] == $word){
              $count++;
           }
          $index++;

     }

     return $count;
    }

    $sentence = "The quick brown fox jumps over the lazy dog";
$word = "the";
$count = countWord($sentence, $word);
echo $count;

    ?>
</body>
</html>