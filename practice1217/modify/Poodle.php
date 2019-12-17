<?php
include "Dog.php";
class Poodle extends Dog{
    protected $size;

    public function __construct($name,$color,$type,$size){
        parent::__construct($name,$color,$type);
        $this->size=$size;
    }
    
    public function dogBark(){
        echo "狗叫...但小聲";
       // parent::dogBark();
    }
}
?>