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
        if( $specialized != "none") {
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
    
    function insertTeacher($name, $specialized, $degree, $avatar, $description){
        global $conn;
        $created =  date("Y-m-d h:i:s");
        if($name != "" && $specialized != "" && $degree != "" && $avatar != "" && $description != ""){
            $sql = "INSERT INTO `teachers` (`name`,`avatar`,`description`, `specialized`, `degree`, `created`) VALUES ('$name', '$avatar', '$description','$specialized','$degree', '$created')";
            $conn->exec($sql);
        }
    };

    function getMaxId(){
        global $conn;
        $sql = "SELECT MAX(id) as max_id FROM `teachers`";
        $id = $conn -> query($sql);
        $id -> execute();
        $invNum = $id -> fetch(PDO::FETCH_ASSOC);
        return $invNum['max_id'];
    };
    
    
?>
