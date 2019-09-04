<?php
require_once '../vendor/autoload.php';
use App\classes\Edit;

$blogId = $_GET['id'];


$blog = new Edit();

$queryResult = $blog->selectBlogInfoByBlogId($blogId);
$blogInfo = mysqli_fetch_assoc($queryResult);

//     echo '<pre>';
//     print_r($blogInfo);

if(isset($_POST['btn'])) {
    $blog->updateBlogInfo($_POST, $blogId);
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
                <li class="active"><a href="#">Add Category <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Manage Category </a></li>
                <li><a href="#">Publication Status</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control " placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
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


<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                <h3 class="text-center text-success">Manage all Category</h3>
                <form action="" method="POST" name="editBlogForm">
                    <table>
                        <tr>
                            <td>Blog Title</td>
                            <td><input type="text" name="blog_title" value="<?php echo $blogInfo['blog_title']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Author Name</td>
                            <td><input type="text" name="author_name" value="<?php echo $blogInfo['author_name']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Blog Description</td>
                            <td><textarea name="blog_description" rows="5" cols="30"><?php echo $blogInfo['blog_description']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Publication Status</td>
                            <td>
                                <select name="publication_status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="btn" value="Update Blog Info"></td>
                        </tr>
                    </table>
                </form>
                <script>
                    document.forms['editBlogForm'].elements['publication_status'].value = '<?php echo $blogInfo['publication_status']; ?>';
                </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="../assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
