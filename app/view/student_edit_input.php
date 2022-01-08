<?php
    require "../controller/student_edit_input_controller.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin Sinh viên</title>
        <link rel='stylesheet' href='../../web/css/student/student_edit.css'>
    </head>
    <body>
        <div class="container body">
            <form action="student_edit_input.php" name="studentEdit" method="POST" id="formId" enctype="multipart/form-data">
                <div class="text-position">
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div> Họ và Tên </div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class="labelinput">
                            <input type='text' name='studentName' id='nameId' value='<?php echo $nameStudent ?>' >
                            <span class='error' id='errorName'><?php echo $error['errorName']; ?></span>
                        </div>
                    </div>
                    
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div>Avatar</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class='label-input'>
                            <img src="<?php echo "../../web/avatar/student/$idStudent/$avatarStudent";?>">
                            <input type="file" name="file" id="file" onchange="uploadFile(this)" oninput='pic.src=window.URL.createObjectURL(this.files[0]);'/>
                            <label for="file">
                            <input type="text" id="file-name" name="avatarStudent" class="name-avatar" value="<?php echo $avatarStudent; ?>" disabled>
                                <span class="custom-upload-file">Browse</span>
                            </label>
                        </div>
                    </div>
        
                    <div class='sub-label'>
                        <div class="labelinput">
                            <div>Mô tả thêm</div>
                        </div>
                        <div style='width: 50px;'></div>
                        <div class="label-input-description">
                            <textarea cols="70" rows="9" maxlength="1000" name='studentDescription' form='formId'><?php echo $descriptionStudent ?></textarea>
                            <span class='error' id='errorDescription'><?php echo $error['errorDescription']; ?></span>
                        </div>
                    </div>
                    <div style='width: 100%;text-align:center;'>
                        <button type='submit' name='submit'>Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
        <script>
        function uploadFile(target) {
            document.getElementById("file-name").value = target.files[0].name;
            document.getElementById("ava").style.display = "none";
        }
        </script>
        <script>
            if (window.history.replaceState) {
			    window.history.replaceState(null, null, window.location.href);
		    }
        </script>
    </body>
</html>