<?php

class Food {
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;

    }

    function __destruct(){
        echo 'the food '.$this->name.' is '.$this->color;
    }
}

$apple = new Food('apple', 'red');