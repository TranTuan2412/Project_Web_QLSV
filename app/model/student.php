<?php
	require '../common/db.php';
	$connectSqlStudent = 'SELECT * FROM `students`';
    $listStudents = $conn ->query($connectSqlStudent);
    $listStudents -> execute();
    
    function deleteStudent($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM students WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchStudent($keyword) {
        global $conn;
        if($keyword != "") {
            $query = $conn->prepare("SELECT * FROM `students` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' ");
            $query->execute();
        }else {
            $sqlRoom = 'SELECT * FROM `students`';
            $query = $conn ->prepare($sqlRoom);
            $query->execute();

        }
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
?>