<?php
include "db.php";
include "header.php";
include "functions.php";
?>

<?php
createUser();
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

<?php
include "footer.php";
?>