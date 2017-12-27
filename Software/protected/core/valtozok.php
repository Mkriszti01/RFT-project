<?php
  class valtozok {

	public function defval($tomb,$kulcs,$default) {
		if (isset($tomb[$kulcs])) {
			return $tomb[$kulcs];
		} else {
			return $default;
		}
	}

	public function readUrl()		{ return $this -> defval($_GET,'d',1); }

// Megjelenítés változói
	public function readRendezes()		{ return $this -> defval($_POST,'KonyvRendezes',0); }
	public function readMufaj()		{ return $this -> defval($_POST,'KonyvMufaja',0); }
	public function readMegjelenites()	{ return $this -> defval($_POST,'KonyvMegjelenites',1); }

// Bevitel változói
	public function readBevSzerzo()		{ return $this -> defval($_POST,'szerzo',''); }
	public function readBevCim()		{ return $this -> defval($_POST,'cim',''); }
	public function readBevMufaj()		{ return $this -> defval($_POST,'mufaj',''); }
	public function readBevLeiras()		{ return $this -> defval($_POST,'leiras',''); }
	                                                                       	
}

?>
