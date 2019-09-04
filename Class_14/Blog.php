<?php

class Blog {
    private $link;
    public function __construct() {
         $this->link = mysqli_connect('localhost', 'root', '', 'practice');
    }
    
    public function GetConnection($sql,$status=NULL){
          if (mysqli_query( $this->link , $sql)) {
               if ($status) {
       $queryResult = mysqli_query($this->link, $sql);
       return $queryResult;
               }  else {
                   $mesage = "Blog info save successfully";
            return $mesage;
               }
            
        } else {
            die('Query Problem' . mysqli_error( $this->link ));
        }
        
    }

    public function saveBlogInfo($data) {
        $sql = "INSERT INTO blogs (blog_title, author_name, blog_description, publication_status) VALUES ('$data[blog_title]', '$data[author_name]', '$data[blog_description]', '$data[publication_status]')";
        $message=$this->GetConnection($sql);
        return $message;
    }

    public function getAllBlogInfo() {
        $sql = "SELECT * FROM blogs ORDER BY id DESC";
        $status='James';
      $queryResult= $this->GetConnection($sql,$status);
      return $queryResult;
        
        
        
        
//        if (mysqli_query($link, $sql)) {
//            $queryResult = mysqli_query($link, $sql);
//            return $queryResult;
//        } else {
//            die('Query Problem' . mysqli_error($link));
//        }
    }

    public function selectBlogInfoByBlogId($blogId) {
        $link = mysqli_connect('localhost', 'root', '', 'practice');
        $sql = "SELECT * FROM blogs  WHERE id = '$blogId' ";
        
        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }
    
    public function updateBlogInfo($data, $blogId) {
         $link = mysqli_connect('localhost', 'root', '', 'practice');
         $sql = "UPDATE blogs SET blog_title = '$data[blog_title]', author_name = '$data[author_name]', blog_description ='$data[blog_description]', publication_status = '$data[publication_status]' WHERE id = '$blogId' ";
         if (mysqli_query($link, $sql)) {
             header('Location: view-blog.php');
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

}
