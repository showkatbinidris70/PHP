<?php include("../include/connect.php");?>

<?php 
$conn = connectDB();
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>


<?php include("../include/header.php");?>

<a href="index.php" class="btn btn-success"><- back</a>
<div class="content mt-3">
    <h3>Add New Category</h3>
    <form action="store.php" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
    
  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
</form>

</div>
<?php include("../include/footer.php");?>