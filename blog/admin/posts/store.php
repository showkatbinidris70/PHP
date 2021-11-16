
<?php 
include("../include/header.php");
include("../include/connect.php");
?>

<?php 
   $rand = rand(100,999);

    $image = 'uploads/'.$rand.$_FILES['image']['name'];
    $upload = '../uploads/'.$rand.$_FILES['image']['name'];
   //move_uploaded_file($_FILES['image']['tmp_name'], '../'.$image);
   move_uploaded_file($_FILES['image']['tmp_name'], $upload);


    $title = $_POST['title'];
    $description = $_POST['description'];
    //$image = $_POST['image'];
    $date = $_POST['date'];
    $category_id = $_POST['category_id'];
    $conn = connectDB();


    $sql="INSERT INTO post VALUES(NULL, '$category_id', '$title', '$description', '$image','$date')";
    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    }else{
        echo "Not inserted";
    }

?>

<?php include("../include/footer.php");?>