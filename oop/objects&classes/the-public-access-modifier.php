<?php

class Customer
{
	public $name;

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();
$customer->name = 'Merradou';
echo $customer->getName(); // Merradou
