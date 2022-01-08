<?php
    include('../common/db.php');
    function showTable(){
        global $conn;
        $sql = "SELECT * FROM `subjects` Where id";
        $stu = $conn->prepare($sql);
        $stu->execute();
        $subject = $stu->fetchAll();
        return $subject;
    }
    function deleteData($id) {
        global $conn;
        $sql = "DELETE FROM `subjects` WHERE id=" . $id;
        $stu = $conn->prepare($sql);
        $stu->execute();
        return 1;
    }
    function searchData($keyword, $school_year) {
        global $conn;
        if( $school_year != "") {
            $stu = $conn->prepare("SELECT * FROM `subjects` WHERE (`name` LIKE '%$keyword%' or `description` LIKE '%$keyword%') and `school_year` = '$school_year' order by id");
            $stu->execute();
        }else if ($keyword != ""){
            $stu = $conn->prepare("SELECT * FROM `subjects` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' order by id");
            $stu->execute();
        }
        if ($keyword == "" && $school_year == "none" ){
            $sqlSubject = 'SELECT * FROM `subjects`';
            $stu = $conn ->prepare($sqlSubject);
            $stu->execute();
        }
        $rowAll = $stu->fetchAll();
        return $rowAll;
    }
    function getID($id) {
        global $conn;
        $edit = $conn->prepare("SELECT * FROM subjects WHERE id=$id");
        $edit->execute();
        return $edit;
    }
    function getsubject($id) {
        global $conn;
        $sql = "SELECT *
                FROM subjects
                WHERE id = '$id' ";
        $subject = $conn->prepare($sql);
        $subject->execute();
        return $subject->fetch();
    }
    function updatesubject($id, $name,$avatar,$description,$school_year) {
        global $conn;
        $sql = "UPDATE subjects SET 
                name = '$name',
                avatar = '$avatar',
                description = '$description',
                school_year = '$school_year'
                WHERE id = '$id' ";
        $subject = $conn->prepare($sql);
        return $subject->execute();
    }
?>