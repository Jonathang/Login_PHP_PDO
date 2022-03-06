<?php  

	$server = 'localhost:3307';
	$username = 'root';
	$password = '';
	$database = 'pt';

	try{
		$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password, 
						array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	}catch(PDOException $e){
		die('Connection Failed: ' . $e->getMessage());
	}


?>