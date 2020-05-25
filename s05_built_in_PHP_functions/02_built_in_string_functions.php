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
    echo "<h2><a target='_blank' href='https://www.php.net/ref.strings'>STRING FUNCTIONS HERE</a></h2>";

    $string = "Hello world, here we are";
    echo "our starting string: '" . $string . "'";

    echo "<h3>Length: strlen(\$string)</h3>";
    echo strlen($string);
    echo "<br><br>";

    echo "<h3>To Upper: strtoupper(\$string)</h3>";
    echo strtoupper($string);
    echo "<br><br>";

    echo "<h3>To Lower: strtolower(\$string)</h3>";
    echo strtolower($string);
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";
}



init();

?>

</body>
</html>