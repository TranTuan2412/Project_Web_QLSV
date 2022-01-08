<?php
    require '../model/student.php';
    $name = $avatar = $des = null;
    $error = array('name' => '', 'avatar' => '', 'des' => '', 'commonErr' => '');

    if(isset($_POST['upload'])) {
        if(empty($_POST['name'])) {
            $error['name'] = '*Hãy nhập tên sinh viên';
            $name = null;
        } else {
            $name = $_POST['name'];
        }
        if (empty($_FILES["file"]["name"])) {
            $error['avatar'] = 'Hãy chọn avatar';
            $avatar = null;
        } else if (!preg_match("/\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/", $_FILES["file"]["name"])) {
            $error['avatar'] = 'Đây không là file ảnh';
            $avatar = null;
        } else {
            $avatar = $_FILES["file"]["name"];
        }
        if(empty($_POST['des'])) {
            $error['des'] = '*Hãy nhập mô tả';
            $des = null;
        } else {
            $des = $_POST['des'];
        }
        $filepath = "../../web/avatar/tmp/" . $_FILES["file"]["name"];
        if(array_filter($error)) {
            //$error['commonErr'] = 'Hãy điền đầy đủ thông tin';
        } else {
            header("location:student_add_confirm.php?name=$name&avatar=$avatar&des=$des");
            if(move_uploaded_file($_FILES['file']['tmp_name'], $filepath)) {
                echo "Done";
            } else {
                echo "Error";
            }
        }
    }
?>