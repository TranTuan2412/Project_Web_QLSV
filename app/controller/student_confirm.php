<?php
    require '../model/student.php';
    $hoVaTen = $_GET['name'];
    $avatar = $_GET['avatar'];
    $moTa = $_GET['des'];
    $dirname = "../../web/avatar/tmp/";
	  $images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE); // phân biệt đuôi ảnh
    if(isset($_POST['confirm'])) {
        add_student($hoVaTen,$avatar,$moTa);
        deleteImgTmp($avatar);
        header('location:student_add_complete.php');
        exit();
    }
    function deleteImgTmp($avatar){
        $file="../../web/avatar/tmp/$avatar";
        $newfile="../../web/avatar/$avatar";
        copy($file, $newfile);
        unlink("../../web/avatar/tmp/".$avatar);
    } 
    // if(isset($_POST['back'])) {
    //     header("location:student_add_input.php?name=$hoVaTen&avatar=$avatar&des=$moTa");
    //     exit();
    // }
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