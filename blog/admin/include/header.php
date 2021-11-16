<?php 
    $url = "http://localhost/blog/admin/";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
     
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SMAT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> 
            </ul>
        </div>
        </div>
    </nav>
    <div class="main-contant">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <a class=" text-white" href="#">Left Menu</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo $url;?>categories/index.php">Category</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo $url;?>posts/index.php">Post</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Update Password</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Cras justo odio</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Profile Picture</a>
                    </li>
                   
                </ul>
                </div>
                <div class="col-md-9">
                   <!--<div class="jumbotron">-->