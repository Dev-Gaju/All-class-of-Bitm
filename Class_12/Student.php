<?php

require_once './Teacher.php';

class Student extends Teacher {

    public $name = "Gaju";
    Private $Car = "Audi";
    protected $phone = "IphoneX";
    public $value;

    public function __construct($data) {
        $this->value = $data;
        echo 'I love developing';
    }

    public function Addition() {
        echo $this->value;
    }

    private function Exchang() {
        echo 'Exchange the phone';
    }

    protected function update() {
        echo 'Update the care';
    }

    public function serriesSummetion($starting_number, $ending_number) {
        $res =0;
        for ($i = $starting_number; $i <= $ending_number; $i++) {
            $res +=$i;
        }
        return $res;
    }

}
