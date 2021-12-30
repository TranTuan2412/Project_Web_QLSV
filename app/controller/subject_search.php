<?php
    require '../model/subject.php';
    if(isset($_POST['search']) ){
        $data = trim($_POST['data']);
        if($data === ''){
            $sql = "SELECT * FROM `subjects` Where id";
            $stu = $conn->prepare($sql);
            $stu->execute();
        }else{
            $sql1 = "SELECT * FROM `subjects` Where `description` LIKE '%$data%' OR `name` LIKE '%$data%'";
            $stu = $conn->prepare($sql1);
            $stu->execute();
        }
    }
?>