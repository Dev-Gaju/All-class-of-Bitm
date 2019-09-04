<?php


class Example {
    public $fname='';
    public $lname='';
  
    
    function AddName(){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $fullName=$fname.' '.$lname;
        return $fullName;
    }
    
}
