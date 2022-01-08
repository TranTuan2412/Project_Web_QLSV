<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./web/css/base.css">
    <title>Quản lý điểm sinh viên</title>
</head>
<body>
    
    <div class="manage_score">
        <div class="form">
            <div class="main">
                <div class="element">
                    <p>Tên login: <?php echo $_SESSION['login'];?></p>
                    
                </div>
                <div class="element">
                    <p>Thời gian login: <?php 
                            
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
        
                            echo date('d/m/Y') . " ". date("h:i");?>
                    </p>
                </div>
                <div class="element">
                    <label><b>Phòng học</b></label>                  
                    <label><b>Giáo viên</b></label>
                    <label><b>Môn học</b></label>
                    <label><b>Sinh viên</b></label> 
                    <label><b>Điểm</b></label>           
                </div>
                <div class="element">
                    <label><a href="">Tìm kiếm</a> </label>
                    <label><a href="app/view/teacher_search_input.php">Tìm kiếm</a> </label>
                    <label><a href="app/view/subject_search.php">Tìm kiếm</a></label>
                    <label><a href="app/view/student_search.php">Tìm kiếm</a></label>
                     <label><a href="app/view/score_search.php">Tìm kiếm</a></label>
                </div>
                <div class="element">
                    <label><a href="">Thêm mới</a> </label>
                    <label><a href="app/view/teacher_add_input.php">Thêm mới</a> </label>
                    <label><a href="">Thêm mới</a> </label>
                    <label><a href="app/view/student_add_input.php">Thêm mới</a> </label>
                    <label><a href="">Thêm mới</a> </label>
                </div>
                <form id="myform"></form>
                <button type="button" form="myform" name="button-logout">
						Đăng xuất
			    </button>
                <?php
                    if(isset($_POST['button-logout'])){
                        $_SESSION['auth'] = FALSE;
                        header("/index.php"); 
                    }
                ?>
                <?php

                ?>
                <!-- <div class="element">
                    <>Đăng xuất</a>
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>