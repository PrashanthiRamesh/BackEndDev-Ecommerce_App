<?php

class Parent1{

    public $z;

    public function add($x, $y){
        return $x+$y;
    }

    function display(){
        echo $this->z;
    }

}

$parent=new Parent1();
$parent->z; //error for private modifier


class Child extends Parent1{

    function __construct(){

    }

    function display(){
        echo $this->z;  
    }

}

$child=new Child();
echo $child->add(2,3);





