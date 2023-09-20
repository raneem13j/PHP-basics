<?php
 $users = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach($users as $user){

  $id = $user["id"];
  $name = $user["name"];
  $email = $user["email"];

  echo "id: $id, name:$name, email: $email \n";


}


?>