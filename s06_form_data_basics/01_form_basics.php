<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="01_form_basics.php" method="POST">
    <input type="text" placeholder="Enter Username" name="username">
    <input type="password" placeholder="Enter Password" name="password">
    <br>
    <input type="submit" name="submit">
</form>


</body>
</html>

<?php

if(isset($_POST['username'])){
    echo "<h3>yep, username was set</h3>";
}

if(isset($_POST['password'])){
    echo "<h3>yep, password was set</h3>";
}

if(isset($_POST['submit'])){
    echo "<h3>yep, submit was set</h3>";
}

echo var_dump($_POST);

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