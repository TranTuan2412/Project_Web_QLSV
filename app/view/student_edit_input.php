<?php
    require "../controller/student_edit_input_controller.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin Sinh viên</title>
        <link rel='stylesheet' href='../../web/css/student_edit.css'>
    </head>
    <body>
        <div>
            <form action="student_edit_input.php" name="studentEdit" method="POST" id="formId" enctype="multipart/form-data">
                <div>
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div> Họ và Tên </div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <input type='text' name='studentName' id='nameId' value='<?php echo $nameStudent ?>' >
                            <span class='error' id='errorName'><?php echo $error['errorName']; ?></span>
                        </div>
                    </div>
                    
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div>Avatar</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <img src="../../web/avatar/1/1.jpg" style="width:150px;height=150px;" alt="<?php echo $avatarStudent; ?>">
                            <br>
                            <span><?php echo $avatarStudent ?></span>
                            <span><input type='file' name='fimeImage'></span>
                        </div>
                    </div>
        
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div>Mô tả thêm</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <input type='text' name='studentDescription' id='nameId' value='<?php echo $descriptionStudent ?>' >
                            <span class='error' id='errorName'><?php echo $error['errorDescription']; ?></span>
                        </div>
                    </div>
                    <div style='width: 100%;text-align:center;'>
                        <button type='submit' name='submit'>Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>