<?php

include_once "protected/modell/listakezeloModell.php";
include_once "protected/modell/menuModell.php";

class listakezeloController {
	
	public $modell;
	public $modell2;
	
	public function __construct() {
		$this -> modell = new listakezeloModell();
		$this -> modell2 = new menuModell();
	}
	
	public function handle($menupont)                           
	{
		
		$bevitel = $this -> modell -> bevitel();
		$menu = $this -> modell2 -> menulekerdez();
		$this -> render($bevitel, $menu, $menupont);
	}
	
	function render($bevitel, $menu, $menupont) {
		include_once "protected/view/head.php";
		include_once "protected/view/menu.php";
		include_once "protected/view/listakezelo.php";
		include_once "protected/view/footer.php";
		
	}
	
	
}

