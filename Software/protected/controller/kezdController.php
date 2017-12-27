<?php

include_once "protected/modell/kezdModell.php";
include_once "protected/modell/menuModell.php";

class kezdController {
	
	public $modell;
	public $modell2;
	
	public function __construct() {
		
		$this -> modell = new kezdModell();
		$this -> modell2 = new menuModell();
	}
	
	public function handle($menupont) {
		$kezd = $this -> modell -> kezd();
		$menu = $this -> modell2 -> menulekerdez();
		$this -> render($kezd, $menu, $menupont);
		
	}
	
	public function render($kezd, $menu, $menupont) {
		
		include_once "protected/view/head.php";
		include_once "protected/view/menu.php";
		include_once "protected/view/kezdview.php";
		include_once "protected/view/footer.php";
		
	}

}