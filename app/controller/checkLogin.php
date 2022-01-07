<?php
    if(!isset($_SESSION['login']) || $_SESSION['login']==''){
        // header("location:http://localhost/quanlysinhvien/");
        header('location:'.URLROOT.'/');
    }
?>