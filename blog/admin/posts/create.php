
<?php 
include("../include/header.php");
include("../include/connect.php");
?>

<?php 
    $conn = connectDB();
    $sql="SELECT * FROM categories";
   // $sql="SELECT * FROM post";
    $result =  mysqli_query($conn, $sql);
//var_dump($result);
?>

<a href="index.php" class="btn btn-success"><- Back</a>
    
<div class="content mt-3">
<h2>Add New Post</h2>

<form action="store.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description"  placeholder="Write Description" rows="6"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Date</label>
        <input type="date" name="date"  class="form-control">
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id">
        <option>Select Category</option>
        <?php 
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <option value="<?=  $row['id'] ?>"><?= $row['title']?></option>
        <?php }?>
        </select>
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

 </div>


<?php include("../include/footer.php");?>