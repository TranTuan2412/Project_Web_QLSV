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
        $id = getId();
        $file="../../web/avatar/tmp/$avatar";
        mkdir("../../web/avatar/student/$id/", 777);
        $newfile="../../web/avatar/student/$id/$avatar";
        copy($file, $newfile);
        unlink("../../web/avatar/tmp/".$avatar);
    } 
?>