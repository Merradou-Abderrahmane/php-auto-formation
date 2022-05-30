<?php


class Customer
{   
    private $name;

	public function setName($name)
	{
		$this->name = $name;
        return $this->name = $name;

	}
 
	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();

$customer->setName('Merradou');
echo $customer->getName(); // Merradou
