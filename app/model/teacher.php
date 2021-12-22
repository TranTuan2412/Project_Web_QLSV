///Chứa các lệnh SQL
<?php
    $sqlSpecialized = 'SELECT * FROM `specialized`';
    $sqlDegree = 'SELECT * FROM `degree`';
    $sqlTeacher = 'SELECT * FROM `teacher` ORDER BY id DESC LIMIT 1';
    $listSpeicalized = $conn->query($sqlSpeicalized);
    $listDegree = $conn->query($sqlDegree);
    $listTeacher = $conn->query($sqlTeacher);
    $listSpeicalized->execute();
    $listDegree->execute();
    $listTeacher->execute();
?>