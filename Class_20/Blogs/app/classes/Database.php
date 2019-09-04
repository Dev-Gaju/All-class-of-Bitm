<?php

namespace App\classes;


class Database
{
    public function db_connection(){
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='blog';
        $link=mysqli_connect($hostname,$username,$password,$dbname);
        return $link;

    }

}