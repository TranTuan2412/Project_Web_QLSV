<?php
  require '../controller/student_confirm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../web/css/student/student_common.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận thêm sinh viên</title>
</head>
<body>
  <div class="box container">
    <form class="mt-5 mb-5" action="" method="POST" enctype="multipart/form-data">
        <div>
            <h1 class="mb-3">Xác nhận thêm sinh viên</h1>
            <div class="mb-3 row">
                <label class="col-3">Họ và tên</label>
                 <div class="col-9">
                    <input type="text" name="name" class="input-field" value="<?php echo $hoVaTen?>" disabled/>
                  </div>
            </div>
            <div class="mb-3 row">
                <label class="col-3">Avatar</label>
                <div class="col-9">
                  <?php
                    foreach ($images as $image) {
                      if (basename($image) == $avatar) {
                        echo "<img src='$image'/> ";
                      }
                    }
                  ?>
                  </div>
            </div>
            <div class="mb-3 row">
                <label class="col-3">Mô tả thêm</label>
                <div class="col-9">
                  <textarea readonly name="des" rows="9" cols="60" maxlength="1000" disabled><?php echo $moTa ?></textarea>
                </div>
            </div>
            <div class="btn-pos mt-5">
                <button type="button" onclick="history.back()" class="btn btn-primary btn-submit">Sửa lại</button>
                <input type="submit" name="confirm" value="Đăng ký" class="btn btn-primary btn-submit">
            </div>
        </div>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
