<?php  

	$server = 'localhost:3306';
	$username = 'epiz_31203941';
	$password = 'P8ZzfDeeTx';
	$database = 'epiz_31203941_login';

	try{
		$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password, 
						array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	}catch(PDOException $e){
		die('Connection Failed: ' . $e->getMessage());
	}


?>