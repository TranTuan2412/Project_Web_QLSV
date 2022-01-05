<?php require '../../app/controller/student_edit_confirm_controller.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Xác nhận thông tin Sinh viên</title>
        <link rel='stylesheet' href='../../web/css/student_edit.css'>
    </head>
    <body>
        <div>
            <form action="student_edit_confirm.php" name="studentConfirm" method="POST" id="formCf">
                <div>
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div> Họ và Tên </div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <div><?php echo $nameStudent; ?></div>
                        </div>
                    </div>
                    
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div>Avatar</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <img src="<?php if($_SESSION['uploadStudent']){
                                echo "../../web/avatar/tmp/".$avatarStudent."";
                            } else{
                                echo "../../web/avatar/".$idStudent."/".$avatarStudent."";
                            } ?>" style="width:150px;height=150px;" alt="<?php echo $avatarStudent; ?>"> 
                            <br>
                            <span><?php echo $avatarStudent;?></span> 
                            <span><?php echo $qr; ?></span>          
                        </div>
                    </div>
        
                    <div class='labelContainer'>
                        <div style='width: 40%; text-align:right;'>
                            <div>Mô tả thêm</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div>
                            <?php echo $descriptionStudent; ?>
                        </div>
                    </div>
                    <div style='width: 100%;text-align:center;'>
                        <button type='submit' name='back'>Sửa lại</button>
                        <button type='submit' name='submit'>Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>