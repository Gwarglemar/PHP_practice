<?php
//include dirname(__DIR__).'/common/db_connection_open.php';

//SUPER-GLOBAL 
print("_GET: ");
print_r($_GET);
print("<br />");

print("_POST: ");
print_r($_POST);
print("<br />");

?>

<?php include dirname(__DIR__).'/common/htmlHeader.php'; ?>

    <div class="container">
        <div class="col-sm-6">
            <a href='?method=GET&text=hi' method='GET'>GET</a>
            <br />
            <br />
            <form action='?method=POST&text=ImInTheRequest' method='POST'>
                <input type='text' name='text'>
                <input type='submit' value='POST'>
            </form>
        </div>
    </div>
    
<?php
    include dirname(__DIR__).'/common/htmlFooter.php';
?>