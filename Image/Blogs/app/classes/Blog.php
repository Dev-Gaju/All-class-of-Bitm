<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 6/1/2019
 * Time: 12:51 AM
 */

namespace App\classes;

class Blog
{

    public  function TestImage(){
        $check=getimagesize($_FILES['blog_image']['tmp_name']);
        if ($check){
            Blog::Existence();

        }else{
            echo 'Please select an Image';
        }

    }
    public function Existence(){
        $pictureName=$_FILES['blog_image']['name'];
        $directory='../asset/blog_images/';
        $targetFile=$directory.$pictureName;
        if (!file_exists($targetFile)){
            Blog::extension();

        }else{
            echo 'file already Exist';
        }
    }

    public function extension(){
        $pictureName=$_FILES['blog_image']['name'];
        $fileType=pathinfo($pictureName, PATHINFO_EXTENSION);
        if ($fileType=='png' || $fileType=='jpg'){
            Blog::ImageSize();

        }else{
            echo 'FileType must be jpg or png';
        }

    }

    public function ImageSize(){
        $pictureName=$_FILES['blog_image']['name'];
        $directory='../asset/blog_images/';
        $targetFile=$directory.$pictureName;

        if ($_FILES['blog_image']['size']<10000000){
            move_uploaded_file($_FILES['blog_image']['tmp_name'],$targetFile);
            return $targetFile;
        }else{
            echo 'Image Size Must be Below 1MB';
        }

    }



//
//    protected function Blogimage(){
//        $pictureName=$_FILES['blog_image']['name'];
//        $directory='../asset/blog_images/';
//        $targetFile=$directory.$pictureName;
//        $fileType=pathinfo($pictureName, PATHINFO_EXTENSION);
//        $check=getimagesize($_FILES['blog_image']['tmp_name']);
//        if ($check){
//            if (! file_exists($targetFile)){
//                if ($fileType=='png' || $fileType=='jpg'){
//                    if ($_FILES['blog_image']['size']<100000004){
//
//                        move_uploaded_file($_FILES['blog_image']['tmp_name'],$targetFile);
//                        return $targetFile;
//
//                    }else{
//                        echo 'please upload size bellow 1 MB';
//                    }
//
//                }else{
//                    echo 'File extension must be png or jpg';
//                }
//            }else{
//                echo 'File already exist';
//            }
//        }else{
//            echo 'Please Upload an Image';
//        }
//
//    }


    public function SaveBlogInfo($data){
        $targetFile=Blog::ImageSize();
        $sql="INSERT INTO blogs (category_id,blog_title,author_name,blog_description,blog_image,publication_status)VALUES 
         ( '$data[category_id]','$data[blog_title]', ' $_SESSION[name]', '$data[blog_description]','$targetFile', '$data[publication_status]')";

        $link=Database::db_connetion();
        if(mysqli_query($link, $sql)) {
            $message = "Blog Save successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }

    }

    public function getallBlogInfo(){
          $sql="SELECT b.*,c.category_name FROM blogs as b, category as c WHERE b.category_id=c.id";
        $link=Database::db_connetion();
        if(mysqli_query($link, $sql)) {
            $queryResult =mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }

    }

    public  function DeleteFromTable($id){
        $link=Database::db_connetion();
        $sql="DELETE FROM blogs WHERE id= '$id'";
        if (mysqli_query($link,$sql)){

            $queryResult =mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }

    }

    public function getallByid($id){
        $sql="SELECT b.*,c.category_name FROM blogs as b, category as c WHERE b.category_id=c.id AND b.id='$id'";
        $link=Database::db_connetion();
        if(mysqli_query($link, $sql)) {
            $queryResult =mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }


    }

    public function unPublishedByid($id){
        $sql="UPDATE blogs SET publication_status= 0 WHERE id='$id'";
        $link=Database::db_connetion();
        if(mysqli_query($link, $sql)) {
           $message="unPublished Successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }


    }
        public function publishedByid($id){

            $sql="UPDATE blogs SET publication_status= 1 WHERE id='$id'";
            $link=Database::db_connetion();
            if(mysqli_query($link, $sql)) {
                $message="Published Successfully";
                return $message;
            } else {
                die('Query Problem'.mysqli_error($link));
            }


        }


        public function updateBlogInfo($data){

            $imageName=$_FILES['blog_image']['name'];
            $link=Database::db_connetion();

            $blog_id=$_POST['blog_id'];
            $blogSql="SELECT * FROM blogs WHERE id='$blog_id'";
            $queryResult=mysqli_query($link,$blogSql);
            $bloginFo=mysqli_fetch_assoc($queryResult);
            unlink($bloginFo['blog_image']);


            if ($imageName)
            {
                $targetFile=Blog::ImageSize();
                $sql=" UPDATE blogs SET category_id='$data[category_id]', blog_title='$data[blog_title]',blog_description='$data[blog_description]',blog_image='$targetFile',publication_status='$data[publication_status]' WHERE id='$data[blog_id]'";


                if(mysqli_query($link, $sql)) {
                    header('Location:manage-blog.php');
                } else {
                    die('Query Problem'.mysqli_error($link));
                }
            }
            else{
                $sql=" UPDATE blogs SET category_id='$data[category_id]', blog_title='$data[blog_title]',blog_description='$data[blog_description]',blog_image='$targetFile',publication_status='$data[publication_status]' WHERE id='$data[blog_id]'";


                if(mysqli_query($link, $sql)) {
                    header('Location:manage-blog.php');
                } else {
                    die('Query Problem'.mysqli_error($link));
                }

            }

           exit();

        }




}