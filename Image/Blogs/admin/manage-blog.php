<?php
require_once '../vendor/autoload.php';
use App\classes\Blog;
use App\classes\Login;
session_start();
if( ! isset($_SESSION['id'])) {
    header('Location:index.php');
}

if (isset($_GET['status'])){
    if ($_GET['status']=='logout'){
        $message=Login::Logout($_POST);
        $_SESSION['message']=$message;
    }
}

if (isset($_GET['status'])){
      $id=$_GET['id'];
      $queryResult=Blog::DeleteFromTable($id);

}

if (isset($_GET['unPublished'])){
    $id=$_GET['id'];
    $message=Blog::unPublishedByid($id);
}

if (isset($_GET['published'])){
    $id=$_GET['id'];
    $message=Blog::publishedByid($id);
}

$queryResult=Blog::getallBlogInfo();
$Updatemessage=$_SESSION['updatemessage'];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Category</title>
    <link href="../asset/admin/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include './includes/header.php'; ?>
<div class="container" style="margin-top: 80px;" >
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <h3 class="text-center text-primary">View Category Information</h3>
                    <h3 class="text-center text-success">
                        <?php
                        if (isset($_SESSION['updatemessage'])) {
                            echo $_SESSION['updatemessage'];
                            unset($_SESSION['updatemessage']);
                        }
                        ?>
                    </h3>
                    <h3 class="text-center text-danger"><?php
                        if (isset($_SESSION['deleteMessage'])) {
                            echo $_SESSION['deleteMessage'];
                            unset($_SESSION['deleteMessage']);}
                        ?>
                    </h3>
                    <hr/>

                    <tr class="info text-primary">
                        <th> SL No</th>
                        <th>Blog Name</th>
                        <th>Category Name</th>
                        <th>Author Name</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i=1;
                    while ($blogs = mysqli_fetch_assoc($queryResult)) { ?>
                        <tr>
                            <td class="text-center"><?php echo $i;?></td>
                            <td><?php echo $blogs['blog_title']; ?></td>
                            <td><?php echo $blogs['category_name']; ?></td>
                            <td><?php echo $blogs['author_name']; ?></td>
                            <td><?php echo $blogs['publication_status'] == 1 ? 'Published' : 'Unpublished'; ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $blogs['id']; ?>" class="btn btn-primary btn-xs" title="view Blogs details">
                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                </a>
                                <?php if ($blogs['publication_status']==1){ ?>
                                <a href="?unPublished=true & id=<?php echo $blogs['id']; ?>" class="btn btn-success btn-xs" title="published" >
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                <?php } else {?>
                                    <a href="?published=true & id=<?php echo $blogs['id']; ?>" class="btn btn-danger btn-xs" title="published" >
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>

                                <?php } ?>
                                <a href="Edit_blogs.php?id=<?php echo $blogs['id']; ?>" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="?status=delete && id=<?php echo $blogs['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete Category ID: <?php echo $blogs['id']; ?>');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    <?php $i++; }  ?>

                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../asset/admin/js/bootstrap.min.js"></script>
</body>
</html>



