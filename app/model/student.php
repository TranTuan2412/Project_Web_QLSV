<?php
	require '../common/db.php';
	$connectSqlStudent = 'SELECT * FROM `students`';
    $listStudents = $conn ->query($connectSqlStudent);
    $listStudents -> execute();
?>