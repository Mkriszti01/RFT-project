<?php

//include_once "protected/controller/autoload.php";
  
class autoload {
	
	
	public function autoload() {
		
		include_once "protected/controller/indexController.php";
		include_once "protected/controller/urlController.php";
		include_once "protected/helper/lang.php";
		include_once "protected/core/db.php";
		include_once "protected/helper/logger.php";
		include_once "protected/core/valtozok.php";

		
	}
	
	
	
	
}

?>
