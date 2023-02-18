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
      
     function isArmstrong($number) {
        $sum = 0;
        $temp = $number;
        $num_digits = strlen((string)$number);
        // iterate through each digit and calculate sum
        while ($temp > 0) {
          $digit = $temp % 10;
          $sum += $digit ** $num_digits;
          $temp = (int)($temp / 10);
        }
        // if the sum equals the original number, it is an Armstrong number
        if ($sum == $number) {
          return true;
        } else {
          return false;
        }
      }
      
      
      
      $number =567;
if (isArmstrong($number)) {
  echo "$number is an Armstrong number.";
} else {
  echo "$number is not an Armstrong number.";
}
      
     $result = 10 / 0;
    
    ?>
</body>
</html>