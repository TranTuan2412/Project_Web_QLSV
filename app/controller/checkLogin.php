<?php
    if(!isset($_SESSION['login']) || $_SESSION['login']==''){
        
        header('location:'.URLROOT.'/');
    }
?>