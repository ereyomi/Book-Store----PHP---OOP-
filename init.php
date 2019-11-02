<?php 
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Manager;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;

use Bookstore\Domain\Payer;

//autoloader function to auto load classes
function autoloader($classname){
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/' . $directory . '.php';
	require_once $filename;
}
spl_autoload_register('autoloader');

//let require classes  (to uncomment this, the autoloader must be comment out)
//require_once __DIR__ . '/Domain/book.php';
//require_once __DIR__. '/Domain/customer.php';
//check

function checkIfValid(Customer $customer, $books) {
	return $customer->getAmountToBorrow() >= count($books);
}

//fuction process payment
function processPayment (Payer $payer, float $amount){
	if($payer->isExtentOfTaxes()){
		//return "you are a lucky one";
		return $payer->isExtentOfTaxes();
	}else{
		$amount *= 1.20;
	}
	$payer->pay($amount);
}

//instantiate
$ereBook = new Book(345678932, "Oluwaseyi the guy", "Ereyomi", 10);
$ereBook1 = new Book(345678932, "Oluwaseyi the guy", "Ereyomi", 10);

//$first_customer = new Bookstore\Domain\Customer(1, "Oluwaseyi", "Ereyomi", "ereyomioluwaseyi@gmail.com");
//$first_customer = new Customer(1, "Oluwaseyi", "Ereyomi", "ereyomioluwaseyi@gmail.com");
$firstCustomer = new Basic(11, "Oluwaseyi", "Ereyomi", "ereyomioluwaseyi@gmail.com");
$premiumCustomer = new Premium(-1, "seyi", "Samuel", "ereyomioluwaseyi@gmail.com");


var_dump($premiumCustomer);
/*
var_dump(checkIfValid($firstCustomer, [$ereBook, $ereBook1]));
var_dump($firstCustomer->getId());
var_dump($premiumCustomer->getId());

$manager = new Manager();
echo $manager->sign();
echo $manager->makeSign();
*/
//var_dump($firstCustomer->getFullName());
//var_dump(processPayment($firstCustomer, 100.00));
//var_dump($first_customer->sayHi());
//var_dump($second_customer);
/*reference it using last instance
echo $first_customer::getLastId();
 
//reference it using class name
echo Customer::getLastId(); */
 ?>