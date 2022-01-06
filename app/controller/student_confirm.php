<?php
    require '../model/student.php';
    $hoVaTen = $_GET['name'];
    $avatar = $_GET['avatar'];
    $moTa = $_GET['des'];
    if(isset($_POST['confirm'])) {
        $sql = "INSERT INTO `students` (`name`,`avatar`,`description`) VALUES ('$hoVaTen','$avatar','$moTa')";
        $conn->exec($sql);
        header('location:student_add_complete.php');
        exit();
    }
    if(isset($_POST['back'])) {
        header("location:student_add_input.php?name=$hoVaTen&avatar=$avatar&des=$moTa");
        exit();
    }
?>