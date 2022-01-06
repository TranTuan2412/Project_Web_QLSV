<?php
    require '../model/teacher.php';
    $teacherName = $_GET['teacherName'];
    $teacherSpecialized = $_GET['teacherSpecialized'];
    $teacherDegree = $_GET['teacherDegree'];
    $teacherAvatar = $_GET['teacherAvatar'];
    $teacherDescription = $_GET['teacherDescription'];

    $dirname = "../../web/avatar/tmp/";
	$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
    if(isset($_POST['button-regist'])) {
        insertTeacher($teacherName, $teacherSpecialized, $teacherDegree, $teacherAvatar, $teacherDescription);
        deleteImgTmp($teacherAvatar);
        header('location:teacher_add_complete.php');
        exit();
    }
    function deleteImgTmp($avatar){
        $id = getId();
        $file="../../web/avatar/tmp/$avatar";
        mkdir("../../web/avatar/$id/", 777);
        $newfile="../../web/avatar/$id/$avatar";
        copy($file, $newfile);
        unlink("../../web/avatar/tmp/".$avatar);
    }
?>
