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
$num = 0;
while($num < 10){
    echo $num;
    echo '<br>';
    $num += 1;
}
echo '<br>';

for($i=0;$i<10;$i++){
    echo $i;
    echo '<br>';
}
echo '<br>';

$nums = [0,1,2,3,4,5,6,7,8,9,10];
foreach ($nums as $num) {
    echo $num;
    echo '<br>';
}
echo '<br>';

?>

</body>
</html>