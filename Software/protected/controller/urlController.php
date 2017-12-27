<?php

class urlController {

	public function readURL($g) {
		if ( ! array_key_exists('d', $g)) 
		{
			return 1;
		}
		return $_GET['d'];
	}
}

?>