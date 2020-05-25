<?php
include dirname(__DIR__).'/common/db_connection_open.php';

//UPDATE
if(isset($_POST['update_submit'])){  
    if(isset($_POST['update_id'])){
        $update_id = $_POST['update_id'];
        $update_id = mysqli_real_escape_string($connection,$update_id);   
    }else{
        $update_id = NULL;
    }if(isset($_POST['update_username'])){
        $update_username = $_POST['update_username']; 
        $update_username = mysqli_real_escape_string($connection,$update_username);  
    }else{
        $update_username = NULL;
    }
    if(isset($_POST['update_password'])){
        $update_password = $_POST['update_password'];   
        $update_password = mysqli_real_escape_string($connection,$update_password);  
    }else{
        $update_password = NULL;
    }

    $hashFormat = "$2y$10$";
    $salt = "needstobetwentytwochar";
    $hashF_and_salt = $hashFormat . $salt;
    $update_password = crypt($update_password, $hashF_and_salt);



    $query =    "UPDATE users SET username = '$update_username', password = '$update_password' WHERE id = $update_id;";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed : ' . mysqli_error($connection));
    }
}

?>

<?php include dirname(__DIR__).'/common/htmlHeader.php'; ?>

    <div class="container">
        <div class="col-sm-6">
            <h3>Update a user</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <select name="update_id" id="">
                    <?php
                        $query =    "SELECT * FROM users;";
                        $result = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $username = $row['username'];
                            echo "<option value='$id'>$id - $username</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="update_username">Username</label>
                    <input type="text" placeholder="Enter Username" name="update_username">
                </div>
                <div class="form-group">
                    <label for="update_password">Password</label>
                    <input type="password" placeholder="Enter Password" name="update_password">
                </div>
                <input class="btn-primary" type="submit" name="update_submit">
            </form>
        <br>
            <a href='https://www.php.net/manual/en/function.crypt.php'>Crypt docs</a>
        </div>
    </div>
    
<?php
    include dirname(__DIR__).'/common/htmlFooter.php';
?>