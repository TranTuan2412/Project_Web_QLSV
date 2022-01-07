<?php
    require '../controller/student_add.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../web/css/student/student_common.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thêm sinh viên</title>
</head>
<body>
    <div class="box container">
        <form class="mt-5 mb-5" action="" method="POST" enctype="multipart/form-data">
            <h1 class="mb-3">THÊM SINH VIÊN</h1>
            <div> 
                <div class="mb-3 row">
                    <label class="col-3">Họ và tên</label>
                    <div class="col-9">
                        <input type="text" name="name" class="input-field" placeholder="Nhập tên sinh viên"/>
                        <div class="error-text"><?php echo $error['name']?></div> 
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3">Avatar</label>
                    <div class="col-9">
                        <input type="file" name="file" id="file" onchange="uploadFile(this)"/>
						<label for="file" class="avatar-field">
							<input type="text" id="file-name" name="avatar" class="input-field" value="<?php echo $avatar; ?>" disabled>
							<span class="btn btn-primary">
								Browse
							</span>
						</label>
                        <div class="error-text"><?php echo $error['avatar'] ?></div>
                    </div> 
                </div>
                <div class="mb-3 row">
                    <label class="col-3">Mô tả thêm</label>
                    <div class="col-9">
                        <textarea name="des" rows="9" cols="60" maxlength="1000" placeholder="Nhập tối đa 1000 ký tự"></textarea>
                        <div class="error-text"><?php echo $error['des']?></div>
                    </div>
                </div>
            </div>
            <div class="btn-pos mt-5">
                <button type="submit" class="btn btn-primary btn-submit" name="upload">Xác nhận</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../web/js/student_add.js"></script>
</body>
</html>