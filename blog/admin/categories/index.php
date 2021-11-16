<?php include("../include/connect.php");?>
<?php 
$conn = connectDB();
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>


<?php include("../include/header.php");?>

<a href="create.php" class="btn btn-success">+ Add Category</a>
<div class="content mt-3">
    <h3>Category List</h3>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        <?php 
            $int = 1;
            while($row = mysqli_fetch_assoc($result)){ ?>
        
        <tr>
            <td><?php echo $int++;?></td>
            <td><?php echo $row['title']?></td>
            <td>
                <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="dalete.php?id=<?php echo $row['id'];?>"
                onclick="return confirm('Are you sure?');">Delete</a>
            </td>
            
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
<?php include("../include/footer.php");?>