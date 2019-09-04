<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 5/31/2019
 * Time: 7:43 PM
 */

namespace App\classes;


class Category
{

    public function saveDataontheDatabase($data){
        $link=Database::db_connetion();
        $sql = "INSERT INTO category (category_name, category_description, publication_status) VALUES ('$data[category_name]', '$data[category_description]', '$data[publication_status]')";
        if(mysqli_query($link,$sql)){
            $message="save data Info Database";
            return $message;
        }else{
            die('Query Problem'.mysqli_error($link));
        }
    }




   public function getonTheTable(){
    $link=Database::db_connetion();
    $sql="SELECT * FROM category ORDER BY id DESC";
    if(mysqli_query($link,$sql)){
        $queryResult=mysqli_query($link,$sql);
        return $queryResult;
    }else{
        die('Query Problem'.mysqli_error($link));
    }
}
            public function setAllonTheTable($categoryId){
                $link=Database::db_connetion();
                $sql="SELECT * FROM category  WHERE  id='$categoryId'";
                if(mysqli_query($link,$sql)){
                    $queryResult=mysqli_query($link,$sql);
                    return $queryResult;
                }else{
                    die('Query Problem'.mysqli_error($link));
                }
            }

            public function updateValueFromDatabase($data,$categoryId){
                $link=Database::db_connetion();
                $sql = "UPDATE category SET category_name = '$data[category_name]', category_description = '$data[category_description]',
               publication_status = '$data[publication_status]' WHERE id = '$categoryId'";
                if(mysqli_query($link,$sql)){

                    header('Location:Manage-Category.php');
                }else{
                    die('Query Problem'.mysqli_error($link));
                }
                        session_start();
                $Updatemessage="$categoryId DUPDATE SUCCESSFULLY";
                return $Updatemessage;

            }



            Public function addInformationinBlog(){
                $link=Database::db_connetion();
                $sql="SELECT * FROM category WHERE publication_status= 1 ";
                if(mysqli_query($link, $sql)) {
                    $queryResult = mysqli_query($link, $sql);
                    return $queryResult;
                } else {
                    die('Query Problem'.mysqli_error($link));
                }



            }


    /**
     *
     */
    public  function DeleteFromTable($id){
        $sql="DELETE FROM category  WHERE id= '$id'";
        $link=Database::db_connetion();

        if(mysqli_query($link, $sql)) {
            $DeleteResult = mysqli_query($link, $sql);
            return $DeleteResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }

    }





}