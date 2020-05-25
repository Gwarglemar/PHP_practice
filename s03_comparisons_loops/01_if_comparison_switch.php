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

echo '<h3>If / else / elseif</h3>';

if(3 < 10){
    echo "'3<10': I mean, not wrong, but why do you need to ask that?";
    echo '<br>';
}

if(false){
    echo 'THIS SHOULD NEVER PRINT';
    echo '<br>';
} elseif (false){
    echo 'what are you doing with your life?';
    echo '<br>';
} else {
    echo 'This should always print.';
    echo '<br>';
}


echo '<h3>comparison and logical operators</h3>';

echo 'and: &&'; 
echo '<br>';
echo 'or: ||'; 
echo '<br>';
echo 'less/greater than (or equal to): < > <= >='; 
echo '<br>';
echo "equal to: == (type-agnostic; '4' == 4 evaluates True)"; 
echo '<br>';
echo 'identical to: === (type-comparison)'; 
echo '<br>';

echo '<h3>Switch statements</h3>';

$number = 4;

switch($number){
    case 34:
        echo "it's 34";
        break;
    case 4:
        echo "it's 4";
        break;
    case null:
        echo "it's null";
        break;
}

?>

</body>
</html>