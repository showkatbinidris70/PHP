<?php
include "db.php";
include "header.php";

?>

<?php

if (isset($_POST['login'])) {
    $_POST['username'];
    $_POST['password'];
}

?>
<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-box">
                    <form action="" method="post">
                        <h1>Admin Login</h1>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="username" class="form-control" autocomplete="on" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>