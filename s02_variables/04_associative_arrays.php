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

$names = ['test1' => 'kurtis', 'test2' => 'oosterhof', 'test3' => 'was', 'test4' => 'here'];

print_r($names);
echo '<br>';


for ($i=1; $i < count($names)+1; $i++) { 
    echo $names['test' . $i] . '<br>';
}

?>

</body>
</html>