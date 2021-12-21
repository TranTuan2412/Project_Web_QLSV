<?php
	$serverName='localhost';
	$userName = 'root';
	$password = '';
	$dbName = 'quanlisinhvien';
	try{
		$connect = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
		$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $exception){
		echo "Connection Failed.". $exception->getMessage();
	}
		
		$sqlStudents = 'SELECT * FROM students';
		$listStudents = $connect ->query($sqlStudents);
		$listStudents -> execute();
?>