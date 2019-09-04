<?php

namespace App\classes;


class Add_category
{
    public function saveBlogInfo($data)
    {
        $link = Database::db_connection();
        $sql = "INSERT INTO add_user (blog_title, author_name, blog_description, publication_status) VALUES ('$data[blog_title]', '$data[author_name]', '$data[blog_description]', '$data[publication_status]')";
        if (mysqli_query($link, $sql)) {
            $message = "Data Save on the Database";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

            public  function GetAllCategory(){
                $link = Database::db_connection();
                $sql="SELECT * FROM add_user WHERE publication_status = 1";
                if (mysqli_query($link, $sql)) {
                    $queryResult =mysqli_query($link, $sql);
                    return $queryResult;
                } else {
                    die('Query Problem' . mysqli_error($link));
                }
            }


}