<?php 

namespace Bookstore\Domain;


interface Customer extends Payer {

	//abstract methods 

	 public function getMontlyFee();
	 public function getAmountToBorrow();
	 public function getType();
	

}
	




 ?>