<?php
    require '../model/teacher.php';
    $rowAll=showTable();
    if(isset($_GET['search'])){
        $word = trim($_GET['filter']);
        $specialized= $_GET['specialized'];
        $rowAll = searchData($word, $specialized);
    }

    if(isset($_POST['delete'])){
        $id = $_POST['infoID'];
        deleteData($id);
        $word = trim($_GET['filter']);
        $specialized= $_GET['specialized'];
        $rowAll = searchData($word, $specialized);
    }
?>