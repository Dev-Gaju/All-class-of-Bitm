<?php
require_once 'vendor/autoload.php';
use App\classes\view;
$queryResult=view::getAllBlogInfo();


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/front/css/heroic-features.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-6 col-md-6 mb-4">
            <div>

                <div>
                    <table border="1">
                        <tr>
                            <th>Blog ID</th>
                            <th>Blog Title</th>
                            <th>Author Name</th>
                            <th>Blog Description</th>
<!--                            <th>Publication Status</th>-->
                        </tr>
                        <?php while ( $blog = mysqli_fetch_assoc($queryResult)) { ?>
                            <tr>
                                <td><?php echo $blog['id']; ?></td>
                                <td><?php echo $blog['blog_title']; ?></td>
                                <td><?php echo $blog['author_name']; ?></td>
                                <td><?php echo $blog['blog_description']; ?></td>
<!--                                <td>--><?php //echo $blog['publication_status'] == 1 ?  'Published' : 'Unpublished'; ?><!--</td>-->
                            </tr>
                        <?php  } ?>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div >
<!--                <img class="card-img-top" src="http://placehold.it/500x325" alt="">-->
                <div >
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!--<!-- Bootstrap core JavaScript -->-->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

</body>

</html>
