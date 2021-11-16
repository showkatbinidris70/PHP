<?php 
include("include/header.php");
include("admin/include/connect.php");
$conn = connectDB();

if( ! $_GET['id']){
    header('Location: index.php');
}
$id = $_GET['id'];
$sql="SELECT post.*, categories.title as category_title
FROM post
JOIN categories on post.category_id = categories.id
WHERE post.id = '$id' ";

 $result =  mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);


?>

<div class="main-contant">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
             
                    <div class="single-post">
                        <h1><?php echo $row['title']?></h1>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="admin/<?php echo $row['image']?>">
                            </div>
                        <div class="col-md-12" style="margin: 15px 0px;">
                            <?php echo $row['category_title'];?>
                        </div>
                            <div class="col-md-12">
                                 <p> <?php echo $row['description']; ?></p>
                            </div>
                        </div> 
                    </div>
              
            </div>
        </div>
    </div>
</div>   


<?php include("include/footer.php");?>