<?php
abstract class Animal{
    public function sleep(){
        echo 'sleeping';
    }
}

class Dog extends Animal{
    public function move(){
        echo 'run';
    }
}

class Bird extends Animal{
    public function move(){
        echo 'fly';
    }
}

class Action{
    public function actionMove(Animal $obj){
        $obj->move();
    }
}

$dog=new Dog();
$bird=new Bird();
$action=new Action();
$action->actionMove($dog);
$action->actionMOve($Bird);
?>