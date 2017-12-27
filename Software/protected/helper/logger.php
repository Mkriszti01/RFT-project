<?php  //konstans log fajlunk lesz, autoload-ban include

define ("LOGFILE", 'log/mainlog.log');


class logger{

	private $mailAddress = "jne.csilla@freemail.hu";
	
	public function log($str) {  //$str kerul a log fajlba
		if (!file_exists(LOGFILE)) {
			if ($f=fopen(LOGFILE, 'w')) {  //ha meg nem letezik, irasra meghivom
				fprintf($f,"%s\n", date("Y-M-d, H:i:s") . " log: " . $str);
			}
			
		}
		else {
			if ($f=fopen(LOGFILE, 'a+')) {
				fprintf($f,"%s\n", date("Y-M-d, H:i:s") . " log: " . $str);
			}
			
		}
//		$message = "Csili Könyvek log";
//		mail("jne.csilla@freemail.hu", "CsKSite Log", 
//			$message);

	
		fclose($f);
	}

	public function error($estr) {
		if (!file_exists(LOGFILE)) {
			if ($f=fopen(LOGFILE, 'w')) {
				fprintf($f,"%s\n", date("Y-M-d, H:i:s") . " Error: " . $estr);
			}
		}
		else {
			if ($f=fopen(LOGFILE, 'a+')) {
				fprintf($f,"%s\n", date("Y-M-d, H:i:s") . " Error: " . $estr);
			}
			
		}
		
//		mail("jne.csilla@freemail.hu", "CsKSite Error", 
//			"date('Y-M-d, H:i:s') . ' Error: ' . $estr");

		fclose($f);
	}
	
}


?>