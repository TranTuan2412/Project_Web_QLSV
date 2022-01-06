<?php
    require '../common/db.php';
    $result = $conn->query("SELECT * FROM students WHERE id='2'");
    $result->execute();
    // function add_student($name,$avatar,$des) {
    //     $sql = "INSERT INTO `students` (`name`,`avatar`, `description`) VALUES ('$avatar')";
    //     $conn->exec($sql);
    // } 
?>