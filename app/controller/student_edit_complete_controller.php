<?php
    session_start();
    if(isset($_SESSION['student_edit_confirm'])||$_SESSION['student_edit_confirm']==FALSE){
        header("Location:home.php");
    }
?>