<?php

class menuModell {

	public $dbm;
	
	public function __construct() {

		$this -> dbm = new db();
		
	}

	public function menulekerdez() {
		
		return $this -> dbm -> query1("select * from menu");

	}
}

?>