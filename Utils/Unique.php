<?php
namespace Bookstore\Utils;


//Exception
use Exception;
trait Unique {
	private static $lastId = 0;	
	private $id;

	public function setId($id){

		try{
			if($id < 1){
			throw new Exception('Id can not be negative num.');
		}

		if(empty($id) || $id == null){
			$this->id = ++self::$lastId;
		}else{
			$this->id = $id;
			if($id > self::$lastId){
			self::$lastId = $id;
			}
		}

		}catch(Exception $e){
			echo $e->getMessage();
		}finally {
			echo "done with try and catch...";
		}
	}
	//acessor
	public static function getlastId(){
		return self::$lastId;
	}
	public function getId(){
		return $this->id;
	}
}

?>