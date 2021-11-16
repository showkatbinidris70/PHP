<?php 
    $url = "http://localhost/blog/";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/style.css">
    <title>Simple Blog</title>
  </head>
  <body>
     
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $url;?>">SMAT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>">Home <span class="sr-only">(current)</span></a>
            </li>
            
            </ul>
        </div>
        </div>
    </nav>
