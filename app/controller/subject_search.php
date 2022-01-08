<?php
    require '../model/subject.php';
    $rowAll=showTable();
    if(isset($_GET['search'])){
        $word = trim($_GET['filter']);
        $school_year= $_GET['school_year'];
        $rowAll = searchData($word, $school_year);
    }

    if(isset($_POST['delete'])){
        $id = $_POST['infoID'];
        deleteData($id);
        $rowAll=showTable();
    }
?>