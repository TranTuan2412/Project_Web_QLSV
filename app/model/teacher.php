<?php
    require '../common/db.php';
    $teachers = $conn->query("SELECT * FROM `teachers` order by id");
	$teachers->execute();

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
        }else {
            $query = $conn->prepare("SELECT * FROM `teachers` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' or `degree` LIKE '%$keyword%' order by id");
        }
        $query->execute();
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
?>