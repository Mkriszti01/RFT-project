<?php

define("USER", 'root');  //makro, a bal oldali helyere beirja a jobb oldali reszt
define("PWD", '');
define("HOST", 'localhost');
define("DB", 'teszt');


class db {
	
	public function connect() {
//		$CID=mysql_connect(HOST, USER, PWD);

		if (!$CID=mysql_connect(HOST, USER, PWD)) {
			logger::error("Sikertelen kapcsolódás az adatbázishoz.");
			exit;
		}

//		mysql_select_db(DB);

		if (!mysql_select_db(DB)) {
			logger::error("Hibás adatbázis név.");
			exit;
		}
		mysql_set_charset('utf8', $CID);		

		logger::log("Sikeres belépés az adatbázisba.");
		return $CID;
		
/*	    try
	    {
	      logger::log("Kapcsolódás az adatbázishoz...");
	      $CID = mysql_connect(HOST, USER, PWD);
	      mysql_select_db(DB);
	      logger::log("Sikeres kapcsolódás2.");
	      return $CID;
	    }
	    catch (Exception $EX)
	    {
	      logger::log("Error::" . $EX);
	      return "Sikertelen kapcsolódás!";
	    }
*/ 	
	}

	
	public function query1($p) {   //$p-ben van a select
		$id=$this -> connect();  //innentol benne vagyunk az ab-ban

		$result=mysql_query($p);

		if (!$result) {
			logger::error("Hibás lekérdezés: " . mysql_error());
			logger::error("   sql: " . $p);
		}else{
			logger::log("Lekérdezés - sql: " .$p);
		}

		$eredmeny=array();  // igy mindenkeen tombot kapunk vissza, akkor is, ha ures -> nem szall el az egesz, ha hibas lekerdezes
		while ($row=mysql_fetch_array($result)) {   //->asszociativ tombot

			$eredmeny[]=$row;
		}  		
		
		$this -> close($id);
		return $eredmeny;
	}
	
	public function query2($p) {   
		$id=$this -> connect();  
		$e=mysql_query($p);
		if (!$e) {
			logger::error("Hibás lekérdezés: " . mysql_error());
			logger::error("   sql: " . $p);
		}else{
			logger::log("Lekérdezés - sql: " .$p);
		}
		
		
		$this -> close($id);
		return $e;
	}

	public function close($p) {
		mysql_close($p);
		logger::log("Kilépés az adatbázisból.");
		
	}
	
}

?>