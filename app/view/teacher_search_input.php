<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Đăng ký</title>
	<link rel="stylesheet" href="Css/regist.css">
</head>
<body>
	
	<?php
	include 'Common/connectDB.php';

    ?>
		<div class='container boder-body'>
			<form name='formSignUp' action="do_regist.php" method="post" id="addform" >
				<div class='formadd'>
					<div class='subformadd'>
						<div class='lable-input color-lable'>
								<div>Họ và tên</div>
						</div>
						<div class='lable-input'>
								<input type='' name='txtNameStudent' id="nameStudent">
								<span class="appear" id="nameError">Hãy nhập tên</span>
						</div>
					</div>
					<div class='subformadd'>
						<div class='lable-input color-lable'>
								<div>Giới tính</div>
						</div>
						<div class='lable-input'>
							<?php foreach ($listGender as $gender) : ?>

											<label style="padding-right: 50px;">
											<input style="margin-top: 15px;" type="radio" name="gender" 
												   id="<?php echo $gender['value']?>"  
												   value="<?php echo $gender['value'] ?>">
													<?php echo $gender['name'] ?>
											</label>
							<?php endforeach; ?>
		
							<span class="appear" id="genderError">Hãy chọn giới tính</span>
						</div >
					</div>
					<div class='subformadd'>
							<div class='lable-input color-lable'>
								<div>Phân Khoa</div>
							</div>
							<div class='lable-input'>
									 <select name='khoa' id='khoa'>
									 		<option value='none'></option>									 		

    										<?php foreach ($listFaculty as $faculty) : ?>

											<option value='<?php echo $faculty['value'] ?>'>
											
														<?php echo $faculty['name']?>
											
											</option>

											<?php endforeach; ?>

	    	
  										</select>
  										<span class="appear" id="khoaError">Hãy chọn khoa</span>
							</div>	
					</div>
					<div class='subformadd'>
						<div class='lable-input color-lable'>
								<div>Năm Sinh</div>
						</div>
						<div class='lable-input'>
								<input type='number' name='age'>
						</div>
					</div>
					<div>
						<button id="submit-btn" type="submit">Đăng ký</button>
					</div>
				</div>
			</form>

		</div>
		<script type="text/javascript" src="JS/regist.js"></script>	
</body>
</html>