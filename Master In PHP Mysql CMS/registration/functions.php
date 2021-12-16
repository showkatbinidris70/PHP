
<?php
// Create users for registration
$message = "";
function createUser()
{
    global $connect;
    //$connect = mysqli_connect('localhost', 'root', '', 'phpdevelopers');
    if (isset($_POST['registration'])) {
        $username = $_POST['username'];
        $password =  $_POST['password'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $address =  $_POST['address'];
               //SQL Injection
        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);
        $email = mysqli_real_escape_string($connect, $email);
        $email = mysqli_real_escape_string($connect, $email);
        $phone = mysqli_real_escape_string($connect, $phone);
        $address = mysqli_real_escape_string($connect, $address);
        // encripted password
        $hassedPass = sha1($password);
        $query = "INSERT INTO users(user_name,password,user_email, user_phone, user_address) VALUES('$username','$hassedPass','$email','$phone','$address')";
        $create_new_user = mysqli_query($connect, $query);
        if (!$create_new_user) {
            die("Query Failed" . mysqli_error($connect));
        }
        header("Location:all_users.php");
        //$message = '<div class="alert alert-success">Congratulatin !' . $username . 'Your registration successfull</div>';
    }
}

// User Update 
function updateUser()
{
    global $connect;
   
}
// User Delete
function deleteUser()
{
    global $connect;
    if (isset($_GET['delete'])) {
        $the_user_id = $_GET['delete'];
        $query = "DELETE FROM users WHERE user_id = $the_user_id";
        $delete_query = mysqli_query($connect, $query);
        header("Location:all_users.php");
    }
}

?>