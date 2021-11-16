
<?php 
include("../include/connect.php");
?>

<?php 
    $id=$_GET['id'];

    $conn = connectDB();
    $sql = "SELECT * FROM post WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $image_location = '../'.$data['image'];

    if(file_exists($image_location)){
        unlink($image_location);
    }

    $sql="DELETE FROM post WHERE id = '$id' ";
    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    }else{
        echo "Not deleted successfully";
    }

?>

