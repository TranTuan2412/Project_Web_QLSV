<?php
    require '../controller/student_add.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../web/student_add.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thêm sinh viên</title>
</head>
<body>
    <div class="box">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>THÊM SINH VIÊN</h1>
            <div class="mt-5"> 
                <div class="mb-3">
                    <label>Họ và tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sinh viên"/>
                    <div class="error-text"><?php echo $error['name']?></div> 
                </div>
                <div class="mb-3">
                    <label>Avatar</label>
                    <input name="des" class="form-control" placeholder="Chọn ảnh" disabled/>
                    <input type="file" name="avatar" id="avatar" title="">
                    <div class="error-text"><?php echo $error['avatar'] ?></div> 
                </div>
                <div class="mb-3">
                    <label>Mô tả thêm</label>
                    <input type="text" name="des" class="form-control" placeholder="Nhập tối đa 100 ký tự"/>
                    <div class="error-text"><?php echo $error['des']?></div>
                </div>
            </div>
            <input type="submit" name="upload" value="Xác nhận">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>