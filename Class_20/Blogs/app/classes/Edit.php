<?php
/**
 * Created by PhpStorm.
 * User: JOKER
 * Date: 5/28/2019
 * Time: 1:56 AM
 */

namespace App\classes;


class Edit
{
    public function selectBlogInfoByBlogId($blogId) {
        $link =Database::db_connection();
        $sql = "SELECT * FROM add_user  WHERE id = '$blogId' ";

        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

    public function updateBlogInfo($data, $blogId) {
        $link = Database::db_connection();
        $sql = "UPDATE add_user SET blog_title = '$data[blog_title]', author_name = '$data[author_name]', blog_description ='$data[blog_description]', publication_status = '$data[publication_status]' WHERE id = '$blogId' ";
        if (mysqli_query($link, $sql)) {
            header('Location:Manage_category.php');
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

}