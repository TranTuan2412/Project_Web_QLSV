<?php
require '../../app/controller/student_edit_confirm_controller.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Xác nhận thông tin Sinh viên</title>
        <link rel='stylesheet' href='../../web/css/student/student_edit.css'>
    </head>
    <body>
        <div class="container body">
            <form method="POST" name="studentConfirm" id="formCf">
                <div class="text-position">
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div>Họ và Tên </div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class="labelinput">
                            <input type='text' name='studentName' id='nameId' value='<?php echo $nameStudent; ?>' disabled >
                        </div>
                    </div>
                    
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div>Avatar</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class="labelinput">
                        <?php
					        foreach ($images as $image) {
						    if (basename($image) == $avatarStudent) {
							    echo "<img src='$image'/> ";
						    }
					    }
					    ?>
                        </div>
                    </div>
        
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div>Mô tả thêm</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class='sub-label'>
                            <textarea cols="70" rows="9" maxlength="1000" name='studentDescription' disabled><?php echo $descriptionStudent ?></textarea>  
                        </div>
                    </div>
                    <div style='width: 100%;text-align:center;'>
                        <button type='button' name='button_back' onclick="history.back()" id='submit_back'>Sửa lại</button>
                        <button type='submit' name='button_next' id='button_next' >Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>