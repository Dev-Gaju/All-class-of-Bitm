<?php

class Demo{
    public $name='Gaju';
    
    function Add(){
        echo 'Calculate the sum';
    }
}
$Obj_staf=new Demo();
$Obj_staf->Add();
echo '<br>';
echo $Obj_staf->name;