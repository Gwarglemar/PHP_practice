<?php
include "db_include.php";
//CREATE
if(isset($_POST['create_submit'])){  
    if(isset($_POST['username'])){
        $username = $_POST['username'];    
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    $query =    "INSERT INTO users(username,password) ";
    $query .=   "VALUES ('$username','$password')";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed' . mysqli_error);
    }
}

//READ
if(isset($_POST['read_submit'])){  
    if(isset($_POST['read'])){
        $read = $_POST['read'];   
    }else{
        $read = NULL;
    }

    $query =    "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed' . mysqli_error);
    }

    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <pre>

        <?php
        print_r($row);
        ?>

        </pre>
        <?php
    }

}

//UPDATE
if(isset($_POST['update_submit'])){  
    if(isset($_POST['update_id'])){
        $update_id = $_POST['update_id'];   
    }else{
        $update_id = NULL;
    }if(isset($_POST['update_username'])){
        $update_username = $_POST['update_username'];   
    }else{
        $update_username = NULL;
    }
    if(isset($_POST['update_password'])){
        $update_password = $_POST['update_password'];   
    }else{
        $update_password = NULL;
    }

    $query =    "UPDATE users SET username = '$update_username', password = '$update_password' WHERE id = $update_id;";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed : ' . mysqli_error($connection));
    }
}

//DELETE
if(isset($_POST['delete_submit'])){  
    if(isset($_POST['delete_id'])){
        $delete_id = $_POST['delete_id'];    
    }else{
        $delete_id = NULL;
    }

    $query =    "DELETE FROM users WHERE users.id = $delete_id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed' . mysqli_error);
    }else{
        echo $result;
    }
}
?>

<?php include dirname(__DIR__).'/common/htmlHeader.php'; ?>

    <div class="container">
        <div class="col-sm-6">
            <h3>Create a user:</h3>
            <form action="01_CRUD.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter Password" name="password">
                </div>
                    <input class="btn-primary" type="submit" name="create_submit">
            </form>

            <h3>List all users</h3>
            <form action="01_CRUD.php" method="POST">
                <input type='hidden' name='read' value='1'>
                <input class="btn-primary" type="submit" name="read_submit">
            </form>

            <h3>Update a user</h3>
            <form action="01_CRUD.php" method="POST">
                <div class="form-group">
                    <select name="update_id" id="">
                    <?php
                        $query =    "SELECT * FROM users";
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

            <h3>Delete a user</h3>
            <form action="01_CRUD.php" method="POST">
                <div class="form-group">
                    <label for="delete_id">User ID #</label>
                    <input type="text" placeholder="Enter ID#" name="delete_id">
                </div>
                <input class="btn-primary" type="submit" name="delete_submit">
            </form>
        </div>
    </div>
    
<?php
    include dirname(__DIR__).'/common/htmlFooter.php';
?>