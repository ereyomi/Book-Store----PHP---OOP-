<?php  

namespace Bookstore\Domain;
//insteadof - as
//use trait
use Bookstore\Utils\Contract;
//use another trait
use Bookstore\Utils\Communicator;


class Manager {
	//trait
	use Contract, Communicator {
		Contract::sign insteadof Communicator;
		Communicator::sign as makeSign;

	}
	public function sign(){
		echo 'It is from the class itself';
	}

}








?>