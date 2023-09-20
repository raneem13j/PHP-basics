<?php

function sum_digit ($num){
   $num = (string)$num;
   $sumDigit = 0;
  

   for($i = 0; $i< strlen($num); $i++){
    
    $sumDigit += $num[$i];
   
   }

  echo $sumDigit. "\n";

}


sum_digit(9999);

?>