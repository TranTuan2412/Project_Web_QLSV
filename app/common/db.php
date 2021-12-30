<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quanlisinhvien";
	//global $connect
	try {
		$connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
		$queryAdmins = "SELECT * FROM admins";
		$admins = $connect->query($queryAdmins);
		$queryScores = "SELECT * FROM scores";
		$scores = $connect->query($queryScores);
		$queryStudents = "SELECT * FROM students";
		$students = $connect->query($queryStudents);
		$querySubjects = "SELECT * FROM subjects";
		$subjects = $connect->query($querySubjects);
		$queryTeachers = "SELECT * FROM teachers";
		$teachers = $connect->query($queryTeachers);
	} catch(PDOException $e) {
		echo "Connection failed" . "<br>" . $e->getMessage();
		exit();
	}
?>
