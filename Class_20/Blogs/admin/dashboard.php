<?php
require_once '../vendor/autoload.php';
use App\classes\Login;
session_start();
if (! isset($_SESSION['id'])){
    header('Location:index.php');
}

if (isset($_GET['status'])){
    if (isset($_GET['status'])==logout){
         $message=Login::logOut($_POST);
         $_SESSION['message']=$message;

    }
    }








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>


    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="Add-category.php">Add Category <span class="sr-only">(current)</span></a></li>
                <li><a href="Manage_category.php">Manage Category </a></li>
                <li><a href="Add-Blog.php"> Add Blog </a></li>
                <li><a href="#">Publication Status</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="?status=logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="../assets/admin/js/bootstrap.min.js"></script>
</body>

</html>