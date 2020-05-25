<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="02_form_validation.php" method="POST">
    <input type="text" placeholder="Enter Username" name="username">
    <input type="password" placeholder="Enter Password" name="password">
    <br>
    <input type="submit" name="submit">
</form>


</body>
</html>

<?php

echo var_dump($_POST);

//yes, text passwords is bad, this is just an exercise
$users = array(
    'kurtis' => 'oosterhof',
    'christina' => 'adams'
);
echo '<br><br>';
echo var_dump($users);

if(isset($_POST['username']) & isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(array_key_exists($username,$users) && $users[$username] == $password){
        echo '<br><br>';
        echo "Welcome " . $username;
        echo '<br><br>';
    }else{
        echo '<br><br>';
        echo "You're not on the list.";
        echo '<br><br>';
    }
}

function init(){
    echo "<h2><a target='_blank' href=''>FORM DOCUMENTATION HERE</a></h2>";
    
    echo "<h3>Form basics</h3>";
    //something
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";

    echo "<h3></h3>";
    //something
    echo "<br><br>";
}

// init();

?>