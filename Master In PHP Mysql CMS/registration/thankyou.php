<?php
include "db.php";
include "header.php";

?>
<?php

$max = 12;
$min = 3;
$message = "";
$welcomeMsg = "";
if (isset($_POST['contact-btn'])) {
    $username =  $_POST['username'];
    $password =   $_POST['password'];

    $users = array("admin", "students", "showkat");

    if (strlen($username) < $min) {
        $message = '<div class="alert alert-danger">User name is too short</div>';
    }
    if (strlen($username) > $max) {
        $message = '<div class="alert alert-danger">User name is too Long</div>';
    }
    if (!in_array($username, $users)) {
        $welcomeMsg = '<div class="alert alert-success">User name does not match</div>';
    } else {
        $welcomeMsg = '<div class="alert alert-success">Welcome to dashboard ' . $username . '</div>';
    }
}

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <h1>Welcome Page</h1>


                <?php
                echo $message;
                echo $welcomeMsg
                ?>

            </div>


        </div>
    </div>
</section>

<?php
include "footer.php";
?>