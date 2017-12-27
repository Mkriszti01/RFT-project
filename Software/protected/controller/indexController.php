<?php

include_once "protected/controller/listController.php";
include_once "protected/controller/impController.php";
include_once "protected/controller/errorController.php";
include_once "protected/controller/kezdController.php";
include_once "protected/controller/listakezeloController.php";
  
class indexController {
	
	
	public function __construct($menupont) {
		switch($menupont) {
			case 1: $controller = new kezdController();
					$controller -> handle($menupont);
					break;
			case 2: $controller = new listController();
					$controller -> handle($menupont);
					break;
			case 3: $controller = new listakezeloController();
					$controller -> handle($menupont);
					break;
			case 4: $controller = new impController();
					$controller -> handle($menupont);
					break;
			default: $controller = new errorController();
				$controller -> handle($menupont);
				break;
				
		}
	}
	
	
	
	
}

?>
