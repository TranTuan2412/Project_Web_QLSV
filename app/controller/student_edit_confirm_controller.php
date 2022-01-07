<?php
    session_start();
    require "../model/student.php";
    if(isset($_SESSION['student_edit_input'])||$_SESSION['student_edit_input']==FALSE||$_GET['idStudent']){
        // header("Location:home.php");
    }
    $_SESSION['student_edit_confirm'] = FALSE;
    $idStudent = $_SESSION['idStudent'];
    $nameStudent = $_GET['nameStudent'];
    $avatarStudent = $_GET['avatarStudent'];
    $descriptionStudent = $_GET['descriptionStudent'];
    if($_SESSION['uploadStudent']){
        $dirImage = "../../web/avatar/tmp/$avatarStudent";
    } else{
        $dirImage = "../../web/avatar/$idStudent/$avatarStudent";
    }
    if(isset($_POST['button_next'])){
        updateData($idStudent,$nameStudent,$descriptionStudent,$avatarStudent);
        if($_SESSION['uploadStudent']){
            deleteAvatarTmp();
        }
        $_SESSION['student_edit_confirm'] = TRUE;
        header("Location:student_edit_complete.php");
    }
    function deleteAvatarTmp(){
        $oldPath = "../../web/avatar/tmp/$avatarStudent";
        $newPath = "../../web/avatar/$idStudent/$avatarStudent";
        copy($oldPath,$newPath);
        unlink("../../web/avatar/tmp/$avatarStudent");
    }
?>