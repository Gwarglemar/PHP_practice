<?php
//include dirname(__DIR__).'/common/db_connection_open.php';

//SUPER-GLOBAL - $_COOKIE 
print("_COOKIE: ");
print_r($_COOKIE);
print("<br />");

print("Cookie Name: ");
print($_COOKIE['CookieName']);
print("<br />"); 

//Setting cookies
$cookie_name = "CookieName";
$cookie_value = 100;
$cookie_expiration = time() + (60*60*24*7);
setcookie($cookie_name,$cookie_value,$cookie_expiration);


?>

<?php include dirname(__DIR__).'/common/htmlHeader.php'; ?>

    <div class="container">
        <div class="col-sm-6">
            
        </div>
    </div>
    
<?php
    include dirname(__DIR__).'/common/htmlFooter.php';
?>