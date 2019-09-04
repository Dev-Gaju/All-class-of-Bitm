<?php


class Teacher {
    public $age=70;
    private $property='70M';
    protected $fund= '120M';
    
    protected function password(){
        echo 'Dont share the password';
    }
    public function worth(){
        echo 'Anyone can know';
    }
    private function hobby(){
        echo 'Its personal Matter';
    }
}
