<?php include("../include/connect.php");?>

<?php 
if(isset($_GET['id'])){

$id = $_GET['id'];
$conn = connectDB();
$sql = "SELECT * FROM categories WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

}

?>


<?php include("../include/header.php");?>

<a href="index.php" class="btn btn-success"><- back</a>
<div class="content mt-3">
    <h3>Edit Category</h3>
    <form action="update.php?id=<?php echo $row['id'];?>" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" value="<?php echo $row['title'];?>" name="title" placeholder="Enter Title">
    
  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
</form>

</div>
<?php include("../include/footer.php");?>