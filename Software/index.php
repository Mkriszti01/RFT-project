<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);



include_once "protected/core/autoload.php";


$autoload = new autoload();

$url = new urlController();
$index = new indexController($url -> readURL($_GET));


?>