<?php
require_once '../vendor/autoload.php';
use App\classes\view;
use App\classes\Delete;
$queryResult=view::getAllBlogInfo();


if(isset($_GET['status'])) {
    $id = $_GET['id'];
    Delete::DeleteFromDatabase($id);

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
                <li><a href="Add-category.php">Add Category <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Manage Category </a></li>
                <li><a href="Add-Blog.php"> Add Blog </a></li>
                <li><a href="#">Publication Status</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="?status=logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<table border="1" style="margin-left: 240px">
    <tr class="bg-success label-success">
        <th>Blog ID</th>
        <th>Blog Title</th>
        <th>Author Name</th>
        <th>Blog Description</th>
        <th>Publication Status</th>
        <th>Action</th>
    </tr>
    <?php while ( $blog = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
            <td><?php echo $blog['id']; ?></td>
            <td><?php echo $blog['blog_title']; ?></td>
            <td><?php echo $blog['author_name']; ?></td>
            <td><?php echo $blog['blog_description']; ?></td>
            <td><?php echo $blog['publication_status'] == 1 ?  'Published' : 'Unpublished'; ?></td>
            <td>
                <a href="Edit.php?id=<?php echo $blog['id']; ?>"> Edit </a> ||
                <a href="?status=delete&id=<?php echo $blog['id']; ?>" onclick="return confirm('Are you sure to delete this !!'); " >  <span class="glyphicon glyphicon-trash"></span>
            </td>
        </tr>
    <?php  } ?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="../assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
