<?php
include "Dog.php";
class Shepherd extends Dog{
    protected $age;

    public function __construct($name,$color,$style,$age){
        parent::__construct($name,$color,$style);
        $this->age=$age;
    }

    public function getAge(){
        return $this->age;
    }

    public function doWork(){
        echo "趕羊..."."<br />";
    }

    public function __destruct(){
        echo "趕羊到家了";
    }
}
?>