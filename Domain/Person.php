<?php  
namespace Bookstore\Domain;

//use trait
use Bookstore\Utils\Unique;

class Person {
	//trait
 	use Unique;

	//private static $lastId = 0;
	
	//private $id;
	private $email;

	protected $firstname;
	protected $surname; 

	public function __construct(int $id, $firstname, $surname, $email) {
		//$this->id = $id;
		//parent::__construct($firstname, $surname);
		/*
		if($id == null){
			$this->id = ++self::$lastId; //self:: for statics
		}else{
			$this->id == $id;
			if($id > self::$lastId){
				self::$lastId = $id;
			}
		}
		*/

		//use the trait

		$this->setId($id);

		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}

	//acessor
	/*
	public static function getlastId(){
		return self::$lastId;
	}
	*/
	public function getFirstname() {
		return $this->firstname;
	}
	public function getFullName() {
		return strtoupper($this->firstname . ' ' . $this->surname);
	}
	public function getEmail() {
		return $this->email;
	}

	//setter or mutators
	public function setEmail(string $email) {
		$this->email = $email;
	}

	//test
	public function sayHi(){
		return 'Howdy ' . $this->firstname;
	}


}


?>