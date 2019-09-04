<?php

echo '<pre>';
print_r($_POST);
print_r($_FILES);

$pictureName=$_FILES['picture']['name'];
$directory='images/';
$targetFiles=$directory.$pictureName;

$fileType=pathinfo($pictureName, PATHINFO_EXTENSION);
$check=getimagesize($_FILES['picture']['tmp_name']);
if ($check){
    if (! file_exists($targetFiles)){
        if ($fileType=='png' || $fileType=='jpg'){
            if ($_FILES['picture']['size']<10200004){

                move_uploaded_file($_FILES['picture']['tmp_name'],$targetFiles);
                echo 'Uploaded Successfully';

            }else{
                echo 'please upload size bellow 1 MB';
            }

        }else{
            echo 'File extension must be png or jpg';
        }
    }else{
        echo 'File already exist';
    }
}else{
    echo ('Please Upload an Image');
}








?>

<!DOCTYPE html>
<html>
<head>
    <title>input Image</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="picture" accept="image/*">
    <input type="submit" name="btn" value="Submit">
</form>

</body>
</html>