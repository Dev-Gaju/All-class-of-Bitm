<?php


class Blog {
    protected $link;
    public function __construct() {
        $this->link=  mysqli_connect('localhost', 'root', '', 'practice');
    }
    private function GetExecution($query,$status=NULL){
        if(mysqli_query($this->link, $query)){
            if ($status){
                $result=mysqli_query($this->link, $query);
                return $result;
            }  else {
                       $message="Save to the Database";
                       return $message;
                
            }

            }
           
          else {
        
            die("QuaryProblem".mysqli_connect_error($this->link));
        }
    }
    public function AddBlogsinfo($data){
        $query="INSERT INTO new_blogs(blogers_title,blogers_name,blog_des,publication_status) VALUES('$data[blogers_title]','$data[blogers_name]','$data[blog_des]','$data[publication_status]')";
       $message=$this->GetExecution($query);
        return $message;
        
        
    }
    public function showOnTable(){
      $query= "SELECT * FROM new_blogs";
      $status='';
     $result=$this->GetExecution($query, $status);
      return $result ;
         
    }
    
}
