<?php
    session_start();
    $idStudent = $nameStudent = $avatarStudent = $descriptionStudent = '';
    $error = array('errorName'=> '','errorAvatar'=>'','errorDescription'=>'');
    require "../model/student.php";

    if(isset($_GET['idStudent'])){
        $idStudent = $_GET['idStudent'];
        $_SESSION['idStudent'] = $_GET['idStudent'];
        if($idStudent != ''){
            $result = getData($idStudent);
        }
        foreach($result as $row){
            $nameStudent = $row['name'];
            $avatarStudent = $row['avatar'];
            $descriptionStudent = $row['description'];
        }
    }
    $idStudent = $_SESSION["idStudent"];

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

        if (empty($_POST['avatarStudent'])) {
            $errors['errorAvatar'] = 'Hãy chọn avatar <br />';
            $avatarStudent = "";
        } else if (!preg_match("/\.(jpg|jpeg|png|JPG|JPEG|PNG)$/", $_POST['avatarStudent'])) {
            $errors['errorAvatar'] = 'Đây không là file ảnh <br />';
            $avatarStudent = "";
        } else {
            $avatarStudent = $_POST['avatarStudent'];
        }



        $filepath = "../../web/avatar/tmp/" . $_FILES["file"]["name"];
        
        if(!array_filter($error)){
            header("Location:student_edit_confirm.php?nameStudent=$nameStudent&descriptionStudent=$descriptionStudent&avatarStudent=$avatarStudent");
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "DONE !!";
            } else {
                echo "Error !!";
            }
        }
        
    }
?>
<?php
    $dirname = "../../web/avatar/student/$idStudent/";
    $images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
?>