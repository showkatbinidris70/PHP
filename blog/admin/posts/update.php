<?php 
include("../include/header.php");
include("../include/connect.php");
?>


<?php
$conn = connectDB();

$id=$_GET['id'];

$sql="SELECT post.*, categories.title as category_title
FROM post
JOIN categories on post.category_id = categories.id
WHERE post.id = '$id' ";

 $result =  mysqli_query($conn, $sql);
 $data = mysqli_fetch_assoc($result);

 $image = '';
 $title = $_POST['title'];
 $description = $_POST['description'];
 $date = $_POST['date'];
 $category_id = $_POST['category_id'];
 
    $update_sql = "UPDATE post SET title = '$title', description = '$description', 
    date='$date', category_id = '$category_id'";

if(!empty($_FILES['image']['name'])){
    $rand = rand(100,999);
    $image = 'uploads/'.$rand.$_FILES['image']['name'];
    $upload = '../uploads/'.$rand.$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);

    $update_sql .= ", image = '$image' ";

    if(!empty($data['image'])){
        unlink('../'.$data['image']);
    }
}


    $update_sql .= "WHERE id = $id";
    mysqli_query($conn, $update_sql);
    header("Location:index.php");