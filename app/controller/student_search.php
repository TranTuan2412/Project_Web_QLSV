<?php
    require '../model/student.php';
    $allStudents=[];
    
    if(isset($_GET['search'])){
        $keyword = trim($_GET['keyword']);
        $allStudents = searchStudent($keyword);
    }

    if(isset($_POST['delete'])){
        $id = $_POST['infoID'];
        deleteStudent($id);
        $keyword = trim($_GET['keyword']);
        $allStudents = searchStudent($keyword);
    }
?>
