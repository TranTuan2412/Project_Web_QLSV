<?php
    session_start();
    $nameStudent = $avatarStudent = $descriptionStudent = '';
    $error = array('errorName'=> '','errorAvatar'=>'','errorDescription'=>'');
    require "../common/db.php";
    $idStudent = $_GET['idStudent'];
    // $idStudent = 1;
    require "../model/student.php";
    $_SESSION['idStudent'] = $idStudent;
    $_SESSION['student_edit_input'] = FALSE;
    
    $uploadStudent = TRUE;
    if(isset($_POST['submit'])){
        if (empty(trim($_POST['studentName']))){
            $error['errorName']= 'Hãy nhập tên sinh viên <br>';
        }
        if (empty(trim($_POST['studentDescription']))){
            $error['errorDescription']= 'Hãy nhập mô tả thêm <br>';
        }
        if(!empty($_FILES['fimeImage']['name'])){
            $target_dir = "../../web/avatar/tmp/";
            $target_file = $target_dir . basename($_FILES['fimeImage']['name']);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $allowtypes= array('jpg', 'png', 'jpeg');
            if(!getimagesize($_FILES['fimeImage']['tmp_name'])){
                $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên hình ảnh <br>';
                $uploadStudent = FALSE;
            }
            if(!in_array($imageFileType,$allowtypes)){
                $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên định dạng JPG,PNG,JPEG <br>';
                $uploadStudent = FALSE;
            }
        }
        
        if(empty($error['errorName'])&&$uploadStudent&&empty($error['errorDescription'])){
            if(!empty($_FILES['fimeImage']['name'])){
                move_uploaded_file($_FILES['fimeImage']['tmp_name'],$target_file);
                $avatarStudent=$_FILES['fimeImage']['name'];
                $_SESSION['uploadStudent'] = TRUE;
            } else{
                $_SESSION['uploadStudent'] = FALSE;
            }
            $_SESSION['nameStudent'] = $nameStudent = trim($_POST['studentName']);
            $_SESSION['descriptionStudent'] = $descriptionStudent = trim($_POST['studentDescription']);
            $_SESSION['avatarStudent'] = $avatarStudent;
            $_SESSION['student_edit_input'] = TRUE;
            header("Location:student_edit_confirm.php");
        }
        
    }
?>