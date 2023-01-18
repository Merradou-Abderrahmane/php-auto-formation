<?php

// override the parent class method example

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


class Audi extends Car
{
    public function message()
    {
        echo "Audi is a German car manufacturer";
    }

    // override the parent class method
    public function intro()
    {
        echo "Choose German quality! I'm an {$this->name}";
    }
}

// Create an object from the child class

$audi = new Audi("Audi");
$audi->message();
echo "<br>";
$audi->intro();