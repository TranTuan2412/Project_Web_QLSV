<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../web/themSinhVien.css" rel="stylesheet">
    <title>Thêm sinh viên</title>
</head>
<body>
    <?php
        include '../common/db.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hoVaTen = $_POST['hoVaTen'];
            $avatar = $_FILES['avatar']['name'];
            $des = $_POST['moTa'];
            $sql = "INSERT INTO `students` (`name`, `avatar`, `description`) VALUES ('$hoVaTen', '$avatar', '$des')";
            $conn->exec($sql);
            $hoVaTen = '';
            $avatar = null;
            $des ='';
            header("location:student_add_confirm.php");
            exit();

        }
    ?>
    <form action="" method="POST" >
        <div>
            <h2>THÊM SINH VIÊN</h2>
            <div>
                <label>Họ và tên</label>
                <input type="text" name="hoVaTen"/>
            </div>
            <div>
                <label>Avatar</label>
                <input type="text"/>
                <input type="file" name="Browse" name="avatar" id="avatar">
            </div>
            <div>
                <label>Mô tả thêm</label>
                <input type="text" name="moTa"/>
            </div>
            <input type="submit" name="submit" value="Đăng ký">
        </div>
    </form>
</body>
</html>