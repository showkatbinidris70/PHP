<?php 
include("include/header.php");
include("admin/include/connect.php");
$conn = connectDB();

$sql = "SELECT count(id) as total FROM post";
$result =  mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

//total post count
//echo $data['total'];

$skip =0;
$take = 2;
$page = 1;

if($_GET['page']){
  $page = $_GET['page'];
   $skip = ($page - 1) * $take;
}
$totalPage = $data['total'] / $take;
$sql = "SELECT * FROM post 
        ORDER BY id DESC
        LIMIT $skip,$take";
$result = mysqli_query($conn, $sql);

?>

<div class="main-contant">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="single-post">
                    <h2>
                        <a href="<?php echo $url; ?>single.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['title']?>
                        </a>
                    </h2>
                        <div class="row">
                            <div class="col-md-3">
                            <a href="<?php echo $url; ?>single.php?id=<?php echo $row['id']; ?>">
                                <img src="admin/<?php echo $row['image']?>">
                            </a>
                            </div>
                            <div class="col-md-9">
                                 <p> <?php echo substr($row['description'], 0, 250); ?></p>
                            </div>
                        </div> 
                    </div>
                <?php }?>
                <div style="margin-bottom: 15px; ">
                     Showing page <?php echo $page; ?> of <?php echo $totalPage; ?> 
                </div>
                <div class="row clearfix">
                    <div class="col-md-3"> 
                        <?php if($page > 1 ){?>
                            <a href="<?php echo $url ?>index.php?page=<?php echo $page -1 ?>"><< Previous</a>
                        <?php }?>
                    </div>
                        <div class="col-md-6">
                            <div class="text-center">
                            <?php for($i = 1; $i <= $totalPage; $i++){?>
                                <a href="<?php echo $url ?>index.php?page=<?php echo $i ?>" class="pagination"> 
                                <?php echo $i; ?>
                                </a>
                            <?php }?>
                            </div>
                        </div>
                     <div class="col-md-3">
                         <?php if($totalPage > $page): ?> 
                        <a href="<?php echo $url ?>index.php?page=<?php echo $page + 1 ?>">Next >></a>
                        <?php endif ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>   


<?php include("include/footer.php");?>