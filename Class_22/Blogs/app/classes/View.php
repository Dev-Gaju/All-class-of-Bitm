<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 6/12/2019
 * Time: 9:07 PM
 */

namespace App\classes;


class View
{

    public function ShowdataontheIndex(){
        $link=Database::db_connetion();
        $sql="SELECT * FROM blogs WHERE publication_status= 1";
        if (mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die('QueryProblrm'.mysqli_error($link));
        }
    }

}