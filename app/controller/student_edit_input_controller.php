<?php
    $nameStudent = $avatarStudent = $descriptionStudent = '';
    $error = array('errorName'=> '','errorAvatar'=>'','errorDescription'=>'');
    require "../common/db.php";
    require "../model/student.php";
    $id = 2;
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $nameStudent = $row['name'];
            $avatarStudent = $row['avatar'];
            $descriptionStudent = $row['description'];
        }
    }
    $upload = false;
    if(isset($_POST['submit'])){
        if (empty(trim($_POST['studentName']))){
            $error['errorName']= 'Hãy nhập tên sinh viên <br>';
        }
        if (empty(trim($_POST['studentDescription']))){
            $error['errorDescription']= 'Hãy nhập mô tả thêm <br>';
        }
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        // if($check){
        //     $avatarStudent = fileUpload();
        //     $upload = true;
        // } else{
        //     $error['errorAvatar'] = 'Hãy tải lên hình ảnh <br>';
        //     $upload = false;
        // }
        if(!empty($_POST['studentName'])&&!empty($_POST['studentDescription'])){
            $nameStudent = trim($_POST['studentName']);
            $descriptionStudent = trim($_POST['studentDescription']);
            header("Location:student_edit_confirm.php?nameStudent=$nameStudent&avatarStudent=$avatarStudent&descriptionStudent=$descriptionStudent");
        }
        
    }
    function fileUpload()
    {   
        // mkdir('../../web/avatar/'.$id.'',0700);
        $target_dir = '../../web/avatar/tmp/';
        $allowImageType = ['jpg','jpge','png'];
        $imageName = $_FILES['file']['name'];
        $pathFile = $_FILES['file']['tmp_name'];
        $baseName = basename();
    }
?>