<?php

define("USER", 'root');  //makro, a bal oldali helyere beirja a jobb oldali reszt
define("PWD", '');
define("HOST", 'localhost');
define("DB", 'teszt');


class db {
	
	public function connect() {
//		$CID=mysql_connect(HOST, USER, PWD);

		if (!$CID=mysql_connect(HOST, USER, PWD)) {
			logger::error("Sikertelen kapcsol�d�s az adatb�zishoz.");
			exit;
		}

//		mysql_select_db(DB);

		if (!mysql_select_db(DB)) {
			logger::error("Hib�s adatb�zis n�v.");
			exit;
		}
		mysql_set_charset('utf8', $CID);		

		logger::log("Sikeres bel�p�s az adatb�zisba.");
		return $CID;
		
/*	    try
	    {
	      logger::log("Kapcsol�d�s az adatb�zishoz...");
	      $CID = mysql_connect(HOST, USER, PWD);
	      mysql_select_db(DB);
	      logger::log("Sikeres kapcsol�d�s2.");
	      return $CID;
	    }
	    catch (Exception $EX)
	    {
	      logger::log("Error::" . $EX);
	      return "Sikertelen kapcsol�d�s!";
	    }
*/ 	
	}

	
	public function query1($p) {   //$p-ben van a select
		$id=$this -> connect();  //innentol benne vagyunk az ab-ban

		$result=mysql_query($p);

		if (!$result) {
			logger::error("Hib�s lek�rdez�s: " . mysql_error());
			logger::error("   sql: " . $p);
		}else{
			logger::log("Lek�rdez�s - sql: " .$p);
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
			logger::error("Hib�s lek�rdez�s: " . mysql_error());
			logger::error("   sql: " . $p);
		}else{
			logger::log("Lek�rdez�s - sql: " .$p);
		}
		
		
		$this -> close($id);
		return $e;
	}

	public function close($p) {
		mysql_close($p);
		logger::log("Kil�p�s az adatb�zisb�l.");
		
	}
	
}

?>