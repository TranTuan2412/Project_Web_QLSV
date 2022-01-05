<?php
    session_start();
    require "../common/db.php";
    $idStudent = $_SESSION['idStudent'];
    $nameStudent = $_GET['nameStudent'];
    $avatarStudent = $_GET['avatarStudent'];
    $descriptionStudent = $_GET['descriptionStudent'];
    if(isset($_POST['back'])){
        header("Location:student_edit_input.php?idStudent=$idStudent");
    }
    // $qr = "UPDATE students SET name='".$nameStudent."',avatar='".$avatarStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
    // $oldPathFile = "../../web/avatar/tmp/".$avatarStudent."";
    // $newPathFile = "../../web/avatar/".$idStudent."/".$avatarStudent."";
    // $qr = "UPDATE students SET name='".$nameStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
    if(isset($_POST['submit'])){
        if($_SESSION['uploadStudent']){
            $oldPathFile = "../../web/avatar/tmp/".$avatarStudent."";
            $newPathFile = "../../web/avatar/".$idStudent."/".$avatarStudent."";
            $time = now();
            $qr = "UPDATE students SET name='".$nameStudent."',avatar='".$avatarStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
            if(rename($oldPathFile,$newPathFile)&&$conn->query($qr)===TRUE){
                header("Location:student_edit_complete.php");
            }
        } else{
            $qr = "UPDATE students SET name='".$nameStudent."',description='".$descriptionStudent."', updated= now() where id=".$idStudent."";
            if($conn->query($qr)===TRUE){
                header("Location:student_edit_complete.php");
            }
        }
    }
?>