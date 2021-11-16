
<?php include("../include/connect.php");?>

<?php 
if(isset($_POST['submit'])){
$title = $_POST['title'];
$conn = connectDB();
$sql = "INSERT INTO categories VALUES(NULL, '$title')";
$result = mysqli_query($conn, $sql);
header("Location: index.php");
}

?>
