<?php
    session_start();
    require "../common/db.php";
    if(isset($_SESSION['student_edit_input'])||$_SESSION['student_edit_input']==FALSE){
        // header("Location:home.php");
    }
    $_SESSION['student_edit_confirm'] = FALSE;
    $idStudent = $_SESSION['idStudent'];
    $nameStudent = $_SESSION['nameStudent'];
    $avatarStudent = $_SESSION['avatarStudent'];
    $descriptionStudent = $_SESSION['descriptionStudent'];
    if(isset($_POST['back'])){
        header("Location:student_edit_input.php?idStudent=$idStudent");
    }

    if($_SESSION['uploadStudent']){
        $oldPathFile = "../../web/avatar/tmp/".$avatarStudent."";
        $newPathFile = "../../web/avatar/".$idStudent."/".$avatarStudent."";
        $qr = "UPDATE students SET name='".$nameStudent."',avatar='".$avatarStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
    } else{
        $qr = "UPDATE students SET name='".$nameStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
    }
    if(isset($_POST['next'])){
        if($_SESSION['uploadStudent']){
            if(rename($oldPathFile,$newPathFile)&&$conn->query($qr)===TRUE){
                unset($_SESSION['student_edit_input']);
                unset($_SESSION['idStudent']);
                unset($_SESSION['avatarStudent']);
                unset($_SESSION['descriptionStudent']);
                $_SESSION['student_edit_confirm'] = TRUE;
                header("Location:student_edit_complete.php");
            }
        } else{
            if($conn->query($qr)===TRUE){
                unset($_SESSION['student_edit_input']);
                unset($_SESSION['idStudent']);
                unset($_SESSION['avatarStudent']);
                unset($_SESSION['descriptionStudent']);
                $_SESSION['student_edit_confirm'] = TRUE;
                header("Location:student_edit_complete.php");
            }
        }
    }
?>