<?php
    require '../model/subject.php';
    if(isset($_POST['delete']) ){
        $sql = "DELETE FROM subjects WHERE id=?";
        $stu= $conn->prepare($sql);
        $stu->execute();
    }
?>