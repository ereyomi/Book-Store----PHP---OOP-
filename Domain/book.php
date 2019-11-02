<?php
	namespace Bookstore\Domain;
	
	class Book {

		public $isbn;
		public $title;
		public $author;
		public $available;

		public function __construct (int $isbn, string $title, string $author, int $available = 0) {
			$this->isbn = $isbn;
			$this->title = $title;
			$this->author = $author;
			$this->available = $available;
		}
		public function __toString(){
			$result = $this->title . ' by '. $this->author;
			if(!$this->available){
				$result.='Not available';
			}
			return $result;
		}
		//methods
		public function getPrintableTitle(){
			$result = $this->title . ' by '. $this->author;
			if(!$this->available){
				$result.='<br> Not available ';
			}
			return $result;
		}

		public function getCopy(){
			if($this->available < 1){
				return false;
			}else {
				$this->available--;
				return true;
			}
		}
	}

	//instantiate
	//$ere =  new Book (353256464, "Ereyomi the enigma guy", "Ereyomi", 5);
	//echo $ere;
?>