<?php
    require '../model/student.php';
    $name = $avatar = $des = null;
    $error = array('name' => '', 'avatar' => '', 'des' => '', 'commonErr' => '');
    
    foreach($result as $row) {
        $name = $row['name'];
        $avatar = $row['avatar'];
        $des = $row['description'];
    }

    if(isset($_POST['upload'])) {
        if(empty($_POST['name'])) {
            $error['name'] = '*Hãy nhập tên sinh viên';
            $name = null;
        } else {
            if($_SESSION['name']) {
                $name = $_SESSION['name'];
            } else {
                $name = $_POST['name'];
                $_SESSION['name'] = $name;
            }
        }
        if(empty($_FILES['avatar']['name'])) {
            $error['avatar'] = '*Hãy chọn avatar';
            $avatar = null;
        } else {
            $avatar = $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], '../../web/avatar/'.$avatar);
        }
        if(empty($_POST['des'])) {
            $error['des'] = '*Hãy nhập mô tả';
            $des = null;
        } else {
            $des = $_POST['des'];
        }
        if(array_filter($error)) {
            //$error['commonErr'] = 'Hãy điền đầy đủ thông tin';
        } else {
            header("location:student_add_confirm.php?name=$name&avatar=$avatar&des=$des");
        }
    }
?>