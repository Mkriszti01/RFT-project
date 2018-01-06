<?php

class listakezeloModell {
	public $dblk;
	public $val;


	public function __construct() {

		$this -> dblk = new db();
		$this -> val = new valtozok();
	}


	public function bevitel() {
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
			$this -> dblk -> query2("insert into `books` (`szerzo`, `cim`, `mufaj`, `leiras`, `kep`) " .
						"values ('" . $this -> val -> readBevSzerzo() . "',
	 						'" . $this -> val -> readBevCim() . "',  
							'" . $this -> val -> readBevMufaj() . "',  
							'" . $this -> val -> readBevLeiras() . "',  
							'public/pict/default.jpg')");
		}
	}                                               


}
