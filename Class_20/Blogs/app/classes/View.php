<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 5/28/2019
 * Time: 12:31 AM
 */

namespace App\classes;


class view
{

    public function getAllBlogInfo()
    {
        $sql = "SELECT * FROM add_user ORDER BY id DESC";

        $link=Database::db_connection();
        if (mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error($link));
        }


    }

}