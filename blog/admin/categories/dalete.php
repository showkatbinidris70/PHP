

<?php 
if(isset($_GET['id'])){
    
$id = $_GET['id'];
include("../include/connect.php");
$conn = connectDB();
$sql = "DELETE FROM categories WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);
header("Location: index.php");
}

?>