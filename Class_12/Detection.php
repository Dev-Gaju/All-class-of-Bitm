<?php


class Detection {
    public function seriesSummetion($firstNumber,$last_Number){
        $res='';
       for($i=$firstNumber; $i<=$last_Number;$i++){
           $res +=$i;
       }       
       return $res;
    }
    
    
}
