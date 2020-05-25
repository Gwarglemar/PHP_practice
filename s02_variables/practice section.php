<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

// make 2 variables number1 / number2, set 1 to 10, 2 to 20
//add the vairables
//make 2 arrays with same values, one regular, other assoc

$number1 = 10;
$number2 = 20;

$sum = $number1 + $number2;
echo $number1 . ' + ' . $number2 . ' = ' . $sum;

echo '<br>';

$array1 = [10,20];
$array2 = ['ten' => 10, 'twenty' => 20];

print_r($array1);
echo '<br>';
print_r($array2);

?>

</body>
</html>