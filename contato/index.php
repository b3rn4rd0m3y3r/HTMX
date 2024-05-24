<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST, PUT, GET, DELETE");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	echo "Veio do PHP (Contato)<br>";
	echo "Id: " . $_GET["id"] . "<br>";
	echo $_SERVER['REQUEST_METHOD'];
?>