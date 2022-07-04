<?php
include 'connect.php';
if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = "delete FROM crud WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo 'Deleted successfully';
        header('location:index.php');
    } else {
        die('Not deleted');
    }
}
