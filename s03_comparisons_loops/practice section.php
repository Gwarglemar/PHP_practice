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

// make an If statement with elseif and else to finally display string saying I love PHP

if(false){
    echo "this shouldn't print";
}elseif(false){
    echo "this also shouldn't print";
}else{
    echo "Step 1: success";
}

echo "<br><br>";

// Make a for loop that displays 10 numbers
for($i=0;$i<10;$i++){
    echo $i;
}
echo "<br>";
echo "step 2: success";

echo "<br><br>";


// Make a switch statement that tests against one condition with 5 collator_set_strength
$test = 10;

switch ($test) {
    case 2:
        # code...
        break;
    
    case 4:
        # code...
        break;
    
    case 6:
        # code...
        break;
    
    case 8:
        # code...
        break;
    
    case 10:
        echo "step 3: success";
        break;
        
    default:
        # code...
        break;
}


?>

</body>
</html>