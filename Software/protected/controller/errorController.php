<?php

include_once "protected/modell/menuModell.php";


class errorController {

	public $modell2;
	
	public function __construct() {
		
		$this -> modell2 = new menuModell();
	}
	
	
	public function handle($menupont) {
		
		$menu = $this -> modell2 -> menulekerdez();
		$this -> render($menu, $menupont);
		
	}
	
	public function render($menu, $menupont) {
		
		include_once "protected/view/head.php";
		include_once "protected/view/menu.php";
		include_once "protected/view/404.php";
		include_once "protected/view/footer.php";
		
	}

}