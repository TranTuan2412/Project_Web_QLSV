<html>

<head>
    <title>Sửa thông tin môn học</title>
    <link rel="stylesheet" href="../../web/subject/subject_edit_styles.css">
</head>
<?php
    require_once '../../app/common/define.php';
    require_once '../../app/model/subject.php';
    session_start();
    $_SESSION['flag']='no';
    $id = isset($_SESSION["subject_id"]) ? $_SESSION["subject_id"] : '';
    $subject = getsubject($id);
    $subject_name = isset($_SESSION["subject_name"]) ? $_SESSION["subject_name"] : '';
?>
<form method='post' action="">
<div id='complete_edit_subject'>
    <div class="complete"> Bạn đã cập nhật thông tin môn học <?php echo $subject_name ?> </div>
    <a class="complete" href="home.php"> <i> Trở về trang chủ </i> </a>
</div>
</form>
</html>
