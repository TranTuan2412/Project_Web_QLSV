<?php
    session_start();
    require "../model/student.php";
    
    $idStudent = $_SESSION['idStudent'];
    $nameStudent = $_GET['nameStudent'];
    $avatarStudent = $_GET['avatarStudent'];
    $descriptionStudent = $_GET['descriptionStudent'];

    if($_SESSION['uploadStudent']){
        $dirImage = "../../web/avatar/tmp/$avatarStudent";
    } else{
        $dirImage = "../../web/avatar/$idStudent/$avatarStudent";
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