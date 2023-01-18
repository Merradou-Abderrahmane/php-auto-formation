<?php

// Inheritance
// Inheritance is a way to reuse code. It allows you to create a new class
//  that is based on an existing class. The new class can reuse all the public and protected methods
//  and properties of the existing class. The existing class is called the parent class, 
// and the new class is called the child class.
// The child class can add its own methods and properties, and can override the methods 
// and properties of the parent class.
// The child class can also call the methods and properties of the parent class using the parent keyword.
// The extends keyword is used to create a child class.

// The following example shows how to create a child class that inherits the public and protected methods and properties of the parent class: ( dont comment it)

class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function intro()
    {
        echo "Choose {$this->name}!";
    }
}

// The child class inherits the public and protected methods and properties from the parent class.
class Audi extends Car
{
    public function message()
    {
        echo "Audi is a German car manufacturer";
    }
}

// Create an object from the child class

$audi = new Audi("Audi");
$audi->message();
echo "<br>";
$audi->intro();
