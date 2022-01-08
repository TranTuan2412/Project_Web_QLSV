<?php
	$serverName='localhost:3306';
	$userName = 'root';
	$password = 'Vinhanh-11';
	$myDB = 'my_database';
	try{
		$conn = new PDO("mysql:host=$serverName;dbname=$myDB",$userName,$password);
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch( PDOException $e){
		echo "Connection Failed". $e->getMessage();
	}
?>