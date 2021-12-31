<?php
    include '../common/db.php';
    $errName = $errDes = $existFile = $errFile = $errAva = null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hoVaTen = $_POST['name'];
        $avatar = $_FILES['avatar']['name'];
        $target_dir = '../../web/assets/img/';
        $target_file = $target_dir . basename($avatar);
        $allow = true;
        $des = $_POST['des'];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $type = array('jpg', 'png', 'jpeg', 'gif');
        if(empty($hoVaTen)) {
            $errName = 'Không được để trống';
            $allow = false;
        } 
        if ($des === '') {
            $errDes = 'Không được để trống';
            $allow = false;
        }
        if(empty($avatar)) {
            $errAva = 'Vui lòng chọn ảnh';
            $allow = false;
        } else {
                if(file_exists($target_file)) {
                $existFile = 'File đã tồn tại';
                $allow = false;
            } else {
                if(!in_array($imageFileType, $type)) {
                    $errFile = 'Không đúng định dạng';
                    $allow = false;
                }
            }
        }
        if($allow) {
            move_uploaded_file($_FILES['avatar']['tmp_name'], '../../web/assets/img/'.$avatar);
            $sql = "INSERT INTO `students` (`avatar`) VALUES ('$avatar')";
            $conn->exec($sql);
            header("location:student_add_confirm.php");
        }
        exit();

    }
?>