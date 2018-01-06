<?php

include_once "protected/modell/impModell.php";
include_once "protected/modell/menuModell.php";

class impController {
	
	public $modell;
	public $modell2;
	
	public function __construct() {
		
		$this -> modell = new impModell();
		$this -> modell2 = new menuModell();
	}
	
	public function handle($menupont) {
		$nev = $this -> modell -> getName();
		$mail = $this -> modell -> getMailAdress();
		$menu = $this -> modell2 -> menulekerdez();
		$this -> render($nev, $mail, $menu, $menupont);
		
	}
	
	public function render($nev, $mail, $menu, $menupont) {
		
		include_once "protected/view/head.php";
		include_once "protected/view/menu.php";
		include_once "protected/view/impView.php";
		include_once "protected/view/footer.php";
		
	}

}