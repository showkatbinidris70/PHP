<?php
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>User Registration</title>
</head>

<body>
    <?php
    $message = "";
    if (isset($_POST['registration'])) {
        $username = $_POST['username'];
        $password =  $_POST['password'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $address =  $_POST['address'];

        $hassedPass = sha1($password);

        $query = "INSERT INTO users(user_name,password,user_email, user_phone, user_address) VALUES('$username','$hassedPass','$email','$phone','$address')";
        $create_new_user = mysqli_query($connect, $query);

        if (!$create_new_user) {
            die("Query Failed" . mysqli_error($connect));
        }
        $message = '<div class="alert alert-success">Congratulatin !' . $username . 'Your registration successfull</div>';
    }

    ?>
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="login-box">
                        <form action="" method="post">
                            <h2>User Registration</h2>
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" name="username" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">User Phone</label>
                                <input type="text" name="phone" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="address">User Address</label>
                                <input type="text" name="address" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="registration" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </form>
                        <?php
                        echo $message;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>