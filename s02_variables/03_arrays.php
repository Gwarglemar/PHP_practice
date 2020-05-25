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

$numberList = [267,8765,345,'5345',345,'<h1>Hello</h1>'];

for ($i=0; $i < count($numberList); $i++) { 
  echo $numberList[$i] . '<br>';
}

?>

</body>
</html>