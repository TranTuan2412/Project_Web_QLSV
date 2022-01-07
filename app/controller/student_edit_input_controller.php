<?php
    session_start();
    $nameStudent = $avatarStudent = $descriptionStudent = '';
    $error = array('errorName'=> '','errorAvatar'=>'','errorDescription'=>'');
    require "../common/db.php";
    require "../model/student.php";
    $_GET['idStudent']= 2;
    if(isset($_GET['idStudent'])){
        $idStudent = $_GET['idStudent'];
        $_SESSION['idStudent'] = $idStudent;
        if($idStudent != ''){
            $result = getData();
        }
        foreach($result as $row){
            $nameStudent = $row['name'];
            $avatarStudent = $row['avatar'];
            $descriptionStudent = $row['description'];
        }
    }
    // $idStudent = 2;
    // $_SESSION['idStudent'] = $idStudent;
    // if($idStudent != ''){
    //     $qr = "SELECT * FROM students where id=$idStudent";
    //     $reponse = $conn->query($qr);
    //     if($reponse->num_rows>0){
    //         while($row = $reponse->fetch_assoc()){
    //             $nameStudent = $row['name'];
    //             $avatarStudent = $row['avatar'];
    //             $descriptionStudent = $row['description'];
    //         }
    //     }
    // }

    $_SESSION['student_edit_input'] = FALSE;
    $uploadStudent = FALSE;

    if(isset($_POST['submit'])){
        if (empty(trim($_POST['studentName']))){
            $error['errorName']= 'Hãy nhập tên sinh viên <br>';
            $nameStudent = "";
        } else if(strlen(trim($_POST['studentName'])) > 100){
            $error['errorName']= 'Hãy nhập dưới 100 ký tự <br>';
        } else {
            $nameStudent = trim($_POST['studentName']);
        }
        if (empty(trim($_POST['studentDescription']))){
            $error['errorDescription']= 'Hãy nhập mô tả thêm <br>';
            $descriptionStudent = "";
        } else if(strlen(trim($_POST['studentDescription']))>1000){
            $error['errorDescription'] = 'Hãy nhập dưới 1000 ký tự <br>';
        } else {
            $descriptionStudent = trim($_POST['studentDescription']);
        }
        if(!empty($_FILES['file']['name'])){
            $target_dir = "../../web/avatar/tmp/";
            $target_file = $target_dir . basename($_FILES['file']['name']);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $allowtypes= array('jpg', 'png', 'jpeg','PNG','JPG','JPEG');
            if(!getimagesize($_FILES['file']['tmp_name'])){
                $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên hình ảnh <br>';
                $uploadStudent = FALSE;
            }
            if(!in_array($imageFileType,$allowtypes)){
                $error['errorAvatar'] = $error['errorAvatar'] . 'Hãy gửi lên định dạng JPG,PNG,JPEG <br>';
                $uploadStudent = FALSE;
            }
        }
        
        if(!array_filter($error)){
            if(!empty($_FILES['file']['name'])){
                move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
                $avatarStudent=$_FILES['file']['name'];
                $_SESSION['uploadStudent'] = TRUE;
            } else{
                $_SESSION['uploadStudent'] = FALSE;
            }
            $_SESSION['student_edit_input'] = TRUE;
            header("Location:student_edit_confirm.php?nameStudent=$nameStudent&descriptionStudent=$descriptionStudent&avatarStudent=$avatarStudent");
        }
        
    }
?>