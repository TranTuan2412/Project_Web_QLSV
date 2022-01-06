<?php
    require '../common/db.php';
    $result = $conn->query("SELECT * FROM students WHERE id='2'");
    $result->execute();
    function add_student($name,$avatar,$des) {
        global $conn;
        $created = date("Y-m-d h:i:s");
        $sql = "INSERT INTO `students` (`name`,`avatar`, `description`, `created`) VALUES ('$name','$avatar','$des','$created')";
        $conn->exec($sql);
    } 
?>