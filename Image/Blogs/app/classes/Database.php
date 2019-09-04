<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 5/31/2019
 * Time: 4:00 PM
 */

namespace App\classes;


class Database
{
    public function db_connetion(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='userinfo';
        $link=mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }

}