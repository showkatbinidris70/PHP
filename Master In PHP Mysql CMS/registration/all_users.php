<?php
include "db.php";
include "header.php";
include "functions.php";
?>

<?php
$query = "SELECT * FROM users";
$select_all_users = mysqli_query($connect, $query);

?>
<section class="login-section">
    <div class="container">
        <div class="row">
            <h2>All Registered Users</h2>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Users Address</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sl = 1;
                    while ($row = mysqli_fetch_assoc($select_all_users)) {
                        $user_id = $row['user_id'];
                        $username = $row['user_name'];
                        $useremail = $row['user_email'];
                        $userphone = $row['user_phone'];
                        $useraddress = $row['user_address'];
                    ?>
                        <tr class="table-active">
                            <th scope="row"><?php echo $sl++; ?></th>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $useremail; ?></td>
                            <td><?php echo $userphone; ?></td>
                            <td><?php echo $useraddress; ?></td>
                            <td>
                                <div class="btn btn-group">
                                    <a class="btn btn-success" href="update_users.php?update=<?php echo $user_id; ?>">Update</a>
                                    <a class="btn btn-danger" href="all_users.php?delete=<?php echo $user_id; ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</section>


<?php
deleteUser();
?>

<?php
include "footer.php";
?>