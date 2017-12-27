<?php


class lang {
	
	public static function text($textLabel, $l) {
		include "protected/lang/" . $l . ".php";
		
		return $dict[$textLabel];
	}
}
