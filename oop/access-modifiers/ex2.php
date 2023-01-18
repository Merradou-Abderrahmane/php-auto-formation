<?php

// the problem 

class Car {
    private $color;
    public $model;
    protected  $year;

}

$car = new Car();
$car->model = 'BMW'; // OK
$car->year = 2010; // Fatal error: Uncaught Error: Cannot access protected property Car::$year
$car->color = 'red'; // Fatal error: Uncaught Error: Cannot access private property Car::$color


