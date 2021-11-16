
<?php 
include("../include/header.php");
include("../include/connect.php");
?>

<?php 
    $id = $_GET['id'];
    $conn = connectDB();
    //$sql="SELECT * FROM post WHERE id = '$id'";

    // $sql = "SELECT post.*, categories.title cat_title
   
   // $sql="SELECT * FROM post";

   $sql="SELECT post.*, categories.title as category_title
   FROM post
   JOIN categories on post.category_id = categories.id
   WHERE post.id = '$id' ";


   
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
//var_dump($row);
?>

<a href="index.php" class="btn btn-success"><- Back</a>
    
<div class="content mt-3">
<h2>Edit Post</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <td><?php echo $row['title']?></td>
            </tr>
            <tr>
                <th>Category</th>
                <td><?php echo $row['category_title']?></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><?php echo $row['description']?></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="../<?php echo $row['image']?>" width="100"></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><?php echo $row['date']?></td>
            </tr>
            
        </thead>

    </table>

 </div>


<?php include("../include/footer.php");?>