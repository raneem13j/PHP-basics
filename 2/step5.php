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
     function wordToDigit($word) {
        switch(strtolower($word)) {
            case 'zero':
                return 0;
                break;
            case 'one':
                return 1;
                break;
            case 'two':
                return 2;
                break;
            case 'three':
                return 3;
                break;
            case 'four':
                return 4;
                break;
            case 'five':
                return 5;
                break;
            case 'six':
                return 6;
                break;
            case 'seven':
                return 7;
                break;
            case 'eight':
                return 8;
                break;
            case 'nine':
                return 9;
                break;
            default:
                return null;
                break;
        }
    }
    
     
    $word = 'three';
$digit = wordToDigit($word);
echo $digit; 

    
    ?>
</body>
</html>