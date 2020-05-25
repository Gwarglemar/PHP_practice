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




function init(){
    echo "<h2><a target='_blank' href='https://www.php.net/ref.math'>MATH FUNCTIONS HERE</a>";

    echo "<h3>Exponents : pow(\$num, \$exponent)</h3>";
    echo pow(2,7);
    echo "<br><br>";

    echo "<h3>Random number: rand(\$low, \$high)</h3>";
    echo rand(1,100);
    echo "<br><br>";

    echo "<h3>Root: sqrt(\$num)</h3>";
    echo sqrt(16);
    echo "<br><br>";

    echo "<h3>Basic Rounding: round(\$dec)</h3>";
    echo round(5.5);
    echo "<br><br>";

    echo "<h3>Round up: ciel(\$dec)</h3>";
    echo ceil(5.5);
    echo "<br><br>";

    echo "<h3>Round down: floor(\$dec)</h3>";
    echo floor(5.5);
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";
}



init();

?>

</body>
</html>