<?php

include_once "protected/modell/listModell.php";
include_once "protected/modell/menuModell.php";

class listController {
	
	public $modell;
	public $modell2;
	
	public function __construct() {
		$this -> modell = new listModell();
		$this -> modell2 = new menuModell();
	}
	
	public function handle($menupont)                           
	{
		
		$lista = $this -> modell -> lista();
		$menu = $this -> modell2 -> menulekerdez();
		$this -> render($lista, $menu, $menupont);
	}
	
	function render($lista, $menu, $menupont) {
		$KonyvMegjelenites = $this -> modell -> val -> readMegjelenites();		
		$KonyvMufaja = $this -> modell -> val -> readMufaj();		
		$KonyvRendezes = $this -> modell -> val -> readRendezes();		
		
		include_once "protected/view/head.php";
		include_once "protected/view/menu.php";
		include_once "protected/view/listview.php";
		include_once "protected/view/footer.php";
		
	}
	
	
}


?>