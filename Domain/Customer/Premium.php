<?php
namespace Bookstore\Domain\Customer;;
 use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

class Premium extends Person implements Customer {

	public function getMontlyFee() {
		return 10.0;
	}

	public function getAmountToBorrow() {
		return 10; 
	}
	
	public function getType() {
		return 'Premium';
	}
	public function pay(float $amount){
		return "Paying $amount";
	}
	public function isExtentOfTaxes(){
		return "Dont worry about paying tax!";
	}
}


?>