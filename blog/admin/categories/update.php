<?php include("../include/connect.php");?>

<?php 
if(isset($_POST['submit'])){
$id = $_GET['id'];
$title = $_POST['title'];
$conn = connectDB();
$sql = "UPDATE categories SET title = '$title' WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: index.php");
}

?>