<?php
    require '../common/db.php';
    function showTable(){
        global $conn;
        $query = $conn->query("SELECT * FROM `teachers` order by id");
	    $query->execute();
        $teachers = $query->fetchAll();
        return $teachers;
    }
    function deleteData($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM teachers WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchData($keyword, $specialized) {
        global $conn;
        if( $specialized != "") {
            $query = $conn->prepare("SELECT * FROM `teachers` WHERE (`name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' or `degree` LIKE '%$keyword%') and `specialized` = '$specialized' order by id");
            $query->execute();
        }else if ($keyword != ""){
            $query = $conn->prepare("SELECT * FROM `teachers` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' or `degree` LIKE '%$keyword%' order by id");
            $query->execute();
        }
        if ($keyword == "" && $specialized == "none" ){
            $sqlTeacher = 'SELECT * FROM `teachers`';
            $query = $conn ->prepare($sqlTeacher);
            $query->execute();
        }
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
?>