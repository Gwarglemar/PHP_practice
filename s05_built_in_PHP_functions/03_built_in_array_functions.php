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

function printArray($list){
    $output = '';
    foreach($list as $item){
        $output = $output . "$item ";
    }
    return $output;
}


function init(){
    echo "<h2><a target='_blank' href='https://www.php.net/ref.array'>ARRAY FUNCTIONS HERE</a></h2>";

    $list = [0,1,2,3,4,5,6];
    echo "our starting array: '" . printArray($list) . "'";

    echo "<h3>Get max value: max(\$list)</h3>";
    echo max($list);
    echo "<br><br>";

    echo "<h3>Get min value: min(\$list)</h3>";
    echo min($list);
    echo "<br><br>";

    echo "<h3>Shuffle the array: shuffle(\$list)</h3>";
    shuffle($list);
    echo printArray($list);
    echo "<br><br>";

    echo "<h3>Sort the array: sort(\$list)</h3>";
    sort($list);
    echo printArray($list);
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";
}



init();

?>

</body>
</html>