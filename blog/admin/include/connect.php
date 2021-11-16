<?php 
 function connectDB(){
    $conn = mysqli_connect("localhost", "root", "", "class_blog");
    return $conn;
}
?>