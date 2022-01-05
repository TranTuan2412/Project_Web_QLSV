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
    function getID($id) {
        global $conn;
        $edit = $conn->prepare("SELECT * FROM teachers WHERE id=$id");
        $edit->execute();
        return $edit;
    }

    function edit($name, $specialized, $degree, $avatar, $description, $updated, $id){
        global $conn;
        if($name != "" && $specialized != "" && $degree != "" && $avatar != "" && $description != ""){
            $success = $conn->query("UPDATE teachers SET name='$name', specialized='$specialized', degree='$degree', avatar='$avatar', description='$description', updated='$updated' WHERE id=$id");
            $success->execute();
        }    
    };
    

    
?>
