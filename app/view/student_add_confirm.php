<?php
    require '../controller/student_confirm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận thêm sinh viên</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <h2>Xác nhận thêm sinh viên</h2>
            <div>
                <label>Họ và tên</label>
                <input name="name" value="<?php echo $hoVaTen ?>" disabled>
            </div>
            <div>
                <label>Avatar</label>
                <img src="'../../web/avatar/' <?php echo $avatar?>" alt="logo"/>
            </div>
            <div>
                <label>Mô tả thêm</label>
                <input name="des" value="<?php echo $moTa ?>" disabled>
            </div>
            <div>
                <button name="back">Sửa lại</button>
                <input type="submit" name="confirm" value="Đăng ký">
            </div>
        </div>
    </form>
</body>
</html>