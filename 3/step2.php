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
$num = 6; 
$factorial = 1;

while($num > 1) {
    $factorial *= $num; 
}

echo $factorial; 
?>

</body>
</html>