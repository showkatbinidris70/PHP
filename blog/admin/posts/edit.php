
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

    $sql="SELECT * FROM categories";
    $result =  mysqli_query($conn, $sql);

?>

<a href="index.php" class="btn btn-success"><- Back</a>
    
<div class="content mt-3">
<h2>Add New Post</h2>

<form action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" 
        value="<?php echo $data['title'];?>" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description"
         placeholder="Write Description" rows="6"><?php echo $data['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        <img src="../<?php echo $data['image'];?>" width="100">
    </div>
    <div class="form-group">
        <label for="title">Date</label>
        <input type="date" name="date" value="<?php echo $data['date'];?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" for="category_id">
        <option>Select Category</option>
        <?php 
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <?php if($data['category_id'] == $row['id']){ ?>
            <option value="<?=  $row['id'] ?>" selected><?= $row['title']?></option>
        <?php }else{  ?>
            <option value="<?=  $row['id'] ?>"><?= $row['title']?></option>
        <?php } ?>
        
        
        <?php }?>
        </select>
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

 </div>


<?php include("../include/footer.php");?>