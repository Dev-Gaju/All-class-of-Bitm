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
    protected function Blogimage(){


        $pictureName=$_FILES['blog_image']['name'];
        $directory='../asset/blog_images/';
        $targetFile=$directory.$pictureName;

        $fileType=pathinfo($pictureName, PATHINFO_EXTENSION);
        $check=getimagesize($_FILES['blog_image']['tmp_name']);
        if ($check){
            if (! file_exists($targetFile)){
                if ($fileType=='png' || $fileType=='jpg'){
                    if ($_FILES['blog_image']['size']<100000004){

                        move_uploaded_file($_FILES['blog_image']['tmp_name'],$targetFile);
                        return $targetFile;

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
            echo 'Please Upload an Image';
        }

    }


    public function SaveBlogInfo($data){
        $targetFile=Blog::Blogimage();
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





}