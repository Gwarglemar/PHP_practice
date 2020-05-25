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


function saySomething(){
    echo "something ";
}

function saySomethings($num){
    for($i=0;$i<$num;$i++){
        echo "something ";
    }
}

function sum($num1,$num2){
    echo $num1 + $num2;
}

function init(){
    echo "<h3>basic function: print 'something' 5 times</h3>";
    $nums = [1,2,3,4,5];
    foreach($nums as $num){
        saySomething();
    }
    echo "<br><br>";

    echo "<h3>function with params: print 'something' X times</h3>";
    saySomethings(5);

    echo "<br><br>";

    echo "<h3>function with params: calculate sum of 2 numbers</h3>";
    sum(55,12);
}

init();

?>

</body>
</html>