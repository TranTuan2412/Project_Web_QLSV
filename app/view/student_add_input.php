<?php
    require '../controller/student_add.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../web/assets/css/studentViews.css" rel="stylesheet">
    <title>Thêm sinh viên</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <h2>THÊM SINH VIÊN</h2>
            <div>
                <label>Họ và tên</label>
                <input type="text" name="name"/>
            </div>
            <?php echo '<span>' . $error['name'] .'</span>'?> 
            <div>
                <label>Avatar</label>
                <input type="file" name="avatar" id="avatar">
                <?php echo '<span>' .$error['avatar'] .'</span>'?>
            </div>
            <div>
                <label>Mô tả thêm</label>
                <input type="text" name="des"/>
                <?php echo '<span>' .$error['des'] .'</span>'?>
            </div>
            <input type="submit" name="upload" value="Xác nhận">
        </div>
    </form>
</body>
</html>