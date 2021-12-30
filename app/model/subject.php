<?php
    include('../common/db.php');
    global $conn;
    $sql = "SELECT * FROM `subjects` Where id";
    $stu = $conn->prepare($sql);
    $stu->execute();
?>