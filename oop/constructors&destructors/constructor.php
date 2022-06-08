<?php

class Person {
    public function __construct(private $name, private $age, private $country) {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCountry() {
        return $this->country;
    }


}


$person = new Person('Merradou', '25', 'France');
echo $person->getName(); // Merradou