<?php
    session_start();
    $nameStudent = $avatarStudent = $descriptionStudent = '';
    $error = array('errorName'=> '','errorAvatar'=>'','errorDescription'=>'');
    require "../common/db.php";
    require "../model/student.php";
    $idStudent = 2;
    $_SESSION['idStudent'] = $idStudent;
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $nameStudent = $row['name'];
            $avatarStudent = $row['avatar'];
            $descriptionStudent = $row['description'];
        }
    }


    if(isset($_POST['submit'])){
        if (empty(trim($_POST['studentName']))){
            $error['errorName']= 'Hãy nhập tên sinh viên <br>';
        }
        if (empty(trim($_POST['studentDescription']))){
            $error['errorDescription']= 'Hãy nhập mô tả thêm <br>';
        }
        $target_dir = "../../web/avatar/tmp/";
        $target_file = $target_dir . basename($_FILES['fimeImage']['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $allowtypes= array('jpg', 'png', 'jpeg');
        if(!getimagesize($_FILES['fimeImage']['tmp_name'])){
            $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên hình ảnh <br>';
        }
        if(!in_array($imageFileType,$allowtypes)){
            $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên định dạng JPG,PNG,JPEG <br>';
        }
        
        if(empty($error['errorName'])&&empty($error['errorAvatar'])&&empty($error['errorDescription'])){
            move_uploaded_file($_FILES['fimeImage']['tmp_name'],$target_file);
            $avatarStudent=$_FILES['fimeImage']['name'];
            $nameStudent = trim($_POST['studentName']);
            $descriptionStudent = trim($_POST['studentDescription']);
            header("Location:student_edit_confirm.php?nameStudent=$nameStudent&avatarStudent=$avatarStudent&descriptionStudent=$descriptionStudent");
        }
        
    }
?>