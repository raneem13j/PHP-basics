<?php
$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");

function personal($n){
   
    foreach ( $n as $key => $value )
    {
    echo "$key=$value\n";
    } 
}

personal($personal_details);


?>