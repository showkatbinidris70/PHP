
<?php 
include("../include/header.php");
include("../include/connect.php");
?>

<?php 
    $conn = connectDB();
    $sql="SELECT * FROM post";
    $result =  mysqli_query($conn, $sql);

?>

<a href="create.php" class="btn btn-success">+ Add Post</a>
<div class="content mt-3">
    <h3>Post List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Serial No</th>
           
                <th>Title</th>
                <!-- <th>Description</th> -->
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $int =1;
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <tr>
            <td><?php echo $int++ ?></td>
            <td><?php echo $row['title'];?></td>
            <!-- <td><?php echo $row['description'];?></td> -->
            <td><img src="../<?= $row['image']; ?>" width="100"></td>
            <td><?php echo $row['date'];?></td>
            <td>
                <a class="btn btn-info btn-sm" href="view.php?id=<?= $row['id']?>">View</a>
                <a class="btn btn-success btn-sm" href="edit.php?id=<?= $row['id']?>">update</a>
                <a class="btn btn-danger btn-sm"  href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure!!')" >Delete</a>
            </td>
        </tr>
        <?php }?>
        </tbody>
    </table>

</div>
<?php include("../include/footer.php");?>