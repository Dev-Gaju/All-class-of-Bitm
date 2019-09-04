<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 5/28/2019
 * Time: 2:22 AM
 */

namespace App\classes;


class Delete
{
    public function DeleteFromDatabase($blogId){
          $sql="DELETE FROM add_user WHERE id ='$blogId'";
        $link=Database::db_connection();
        if (mysqli_query($link,$sql)){
            $deletation=mysqli_query($link,$sql);
            return $deletation;
        }else{
            die('Query Problem'.mysqli_error($link));
        }

    }

}