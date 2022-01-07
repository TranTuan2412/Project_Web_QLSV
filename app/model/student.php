<?php
    require '../common/db.php';
    function add_student($name,$avatar,$des) {
        global $conn;
        $created = date("Y-m-d h:i:s");
        $sql = "INSERT INTO `students` (`name`,`avatar`, `description`, `created`) VALUES ('$name','$avatar','$des','$created')";
        $conn->exec($sql);
    } 
    function getId(){
        global $conn;
        $sql = "SELECT MAX(id) as max_id FROM `students`";
        $id = $conn -> query($sql);
        $id -> execute();
        $invNum = $id -> fetch(PDO::FETCH_ASSOC);
        return $invNum['max_id'];
    }
?>