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



$id=$_GET['id'];
  $queryResult=Blog::getallByid($id);
  $resultInfo=mysqli_fetch_assoc($queryResult);




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
                    <h3 class="text-center text-primary">View Blog Information</h3>

                    <hr/>

                    <tr class="info text-primary">
                    <tr>
                        <th> Blog ID</th>
                        <td><?php echo $resultInfo['id']?></td>
                    </tr>
                    <tr>
                        <th> Category ID</th>
                        <td><?php echo $resultInfo['category_id']?></td>
                    </tr>
                    <tr>
                        <th> Category_name</th>
                        <td><?php echo $resultInfo['category_name']?></td>
                    </tr>
                    <tr>
                        <th> Blog Name</th>
                        <td><?php echo $resultInfo['blog_title']?></td>
                    </tr>


                    <tr>
                        <th> Category Name</th>
                        <td><?php echo $resultInfo['blog_description']?></td>
                    </tr>

                    <tr>
                        <th> Author Name</th>
                        <td><?php echo $resultInfo['author_name']?></td>
                    </tr>
                    <tr>
                        <th> Blog Image</th>
                        <td><img src="<?php echo $resultInfo['blog_image'];?>" alt=""/></td>
                    </tr>
                    <tr>
                        <th> Blog Description</th>
                        <td><?php echo $resultInfo['publication_status']==1? 'Published':'Unpublished'?></td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../asset/admin/js/bootstrap.min.js"></script>
</body>
</html>



