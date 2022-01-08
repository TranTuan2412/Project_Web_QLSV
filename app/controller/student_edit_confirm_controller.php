<?php
    session_start();
    require "../model/student.php";
    
    $idStudent = $_SESSION['idStudent'];
    $nameStudent = $_GET['nameStudent'];
    $avatarStudent = $_GET['avatarStudent'];
    $descriptionStudent = $_GET['descriptionStudent'];

    if (file_exists("../../web/avatar/tmp/".$avatarStudent)) {
        $dirname = "../../web/avatar/tmp/";
        $images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
    } else {
        $dirname = "../../web/avatar/student/$idStudent";
        $images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
    }

    function deleteAvatarTmp($idStudent,$avatarStudent){
        $oldPath = "../../web/avatar/tmp/$avatarStudent";
        $newPath = "../../web/avatar/student/$idStudent/$avatarStudent";
        copy($oldPath,$newPath);
        unlink("../../web/avatar/tmp/$avatarStudent");
    }

    if(isset($_POST['button_next'])){
        updateData($idStudent,$nameStudent,$descriptionStudent,$avatarStudent);
        deleteAvatarTmp($idStudent,$avatarStudent);
        header("Location:student_edit_complete.php");
    }
    
?>