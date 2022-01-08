<?php
    require '../model/score.php';

    $data=getAllScore();
   
    if(isset($_GET['search'])){
        $name = trim($_GET['sv']);
        $subject = trim($_GET['mh']);
        $teacher = trim($_GET['gv']);
        $data = searchScore($name,$subject,$teacher);
    }

    if(isset($_POST['scoreId'])){
        $id = $_POST['scoreId'];
        deleteScore($id);
        $data=getAllScore();
    }
?>