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
$num = 6; // the input number whose factorial we want to calculate
$factorial = 1; // initialize the factorial variable to 1

while($num > 1) {
    $factorial *= $num; // multiply the current value of $factorial with $num
    $num--; // decrement $num by 1 for each iteration
}

echo $factorial; // print the result
?>

</body>
</html>