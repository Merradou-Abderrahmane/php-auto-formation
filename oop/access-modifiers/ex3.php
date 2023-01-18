<?php

class Car {

     
    private $color;
    private $model;
    private  $year;
    
    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

}

$car = new Car();
$car->setModel('BMW'); // OK
$car->setYear(2010); // OK
$car->setColor('red'); // OK

echo $car->getModel(); // OK
echo $car->getYear(); // OK
echo $car->getColor(); // OK