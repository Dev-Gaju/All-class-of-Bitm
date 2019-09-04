<?php

session_start();
if (isset($_SESSION['id'])){
    header('Location:dashboard.php');
}


$message = '';
if (isset($_POST['btn'])) {
    require_once './Login.php';
    $login = new Login();
    $message = $login->AdminLoginCheck($_POST);
    
}

    $result='';
  if(isset($_POST['status'])){
      require_once './dashboard.php';
       $login = new Login();
       $result=$login->Logout();
  }
    

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="well">
                        <h3 class="text-center text-success">Admin Login</h3>
                        <hr/>
                       
                        <h3 class="text-center text-danger"><?php echo $message; ?></h3>
                         <h3 class="text-center text-danger"><?php echo $result; ?></h3>
                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>