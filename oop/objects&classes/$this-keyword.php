<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
//$this keyword references the current object of the class. It’s only available within the class.
			$this->balance += $amount;
		}
	}
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;


