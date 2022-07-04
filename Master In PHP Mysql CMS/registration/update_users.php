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
    <title>User Update</title>
</head>

<body>
    <?php
    if (isset($_GET['update'])) {
        $user_id = $_GET['update'];
        $query = "SELECT * FROM users WHERE user_id = $user_id";
        $select_user_id = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_assoc($select_user_id)) {
            $user_id = $row['user_id'];
            $username = $row['user_name'];
            $password = $row['password'];
            $email = $row['user_email'];
            $phone = $row['user_phone'];
            $address = $row['user_address'];
    ?>

            <section class="login-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="login-box">
                                <form action="" method="POST">
                                    <h2>User Update</h2>
                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input type="text" name="username" class="form-control" autocomplete="off" value="<?php echo $username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" autocomplete="off" required value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" name="email" class="form-control" autocomplete="off" required value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">User Phone</label>
                                        <input type="text" name="phone" class="form-control" autocomplete="off" required value="<?php echo $phone; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">User Address</label>
                                        <input type="text" name="address" class="form-control" autocomplete="off" required value="<?php echo $address; ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="update" class="btn btn-primary mt-3">Update User Info</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

    <?php
        }
    }

    ?>


    <?php

    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $query = "UPDATE users SET user_name = '$username', password='$password', 
                    user_email='$email', user_phone = '$phone', user_address ='$address' 
                    WHERE user_id= '$user_id'";
        $update_query = mysqli_query($connect, $query);
        if (!$update_query) {
            die("Update falied" . mysqli_error($connect));
        } else {
            header("Location:all_users.php");
        }
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>