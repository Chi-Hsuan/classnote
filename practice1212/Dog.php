<?php
class Dog{
    public $name;
    public $color;
    public $style;
    
    public function __construct($name,$color,$style){
        $this->name = $name;
        $this->color = $color;
        $this->style = $style;
    }

    public function dogRun(){
        echo "狗狗跑步中...";
    }

    public function dogBark(){
        echo "狗叫...";
    }

    public function __destuct(){
        echo "狗狗回家了...";
    }
}
?>