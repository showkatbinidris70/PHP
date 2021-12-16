<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Array with for loop</title>
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>