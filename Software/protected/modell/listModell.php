<?php

class listModell {
	public $dbl;
	public $val;


	public function __construct() {

		$this -> dbl = new db();
		$this -> val = new valtozok();
	}


 
	public function rend() {
	  switch ($this -> val -> readRendezes()) {
		case 1:
			$rend=" order by cim";
			break;
		case 2:
			$rend=" order by szerzo";
			break;
		default:
			$rend=""; 
			break;
	  }
	 return $rend;	
	}

	public function mufaj() {
	  switch ($this -> val -> readMufaj()) {
		case 1:
			$mufaj=" where mufaj='Mese'";
			break;
		case 2:
			$mufaj=" where mufaj='Ifjúsági regény'";
			break;
		case 3:
			$mufaj=" where mufaj='Regény'";
			break;
		case 4:
			$mufaj=" where mufaj='Krimi'";
			break;
		default:
			$mufaj=""; 
			break;
	  }
	 return $mufaj;	
	}


	public function lista() {
		
		return $this -> dbl -> query1("select * from books" . $this -> mufaj() . $this -> rend());
	}
}
?>