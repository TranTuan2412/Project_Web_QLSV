<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Xác nhận thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/teacher_add_confirm.css">
</head>
<body>
	<?php
		require '../controller/teacher_add_confirm.php';

	?>
	<div class='container body'>
		<form name='formSignUp' action='' method="POST" >
			<div class='text-position'>
				<div class='sub-label'>
				<div class='labelinput'>
						<div>Họ và tên</div>
					</div>
					<div class='labelinput'>
						<input type="text" name="teacherName" value="<?php echo $teacherName ?>" disabled>
					</div>
				</div>
				<div class='sub-label'>
				<div class='labelinput'>
						<div>Chuyên ngành</div>
					</div>
					<div class='labelinput'>
						<input type="text" name="teacherSpecialized" value="<?php echo $teacherSpecialized ?>" disabled>
					</div>
				</div>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Bằng cấp</div>
					</div>
					<div class='labelinput'>
						<input type="text" name="teacherDegree" value="<?php echo $teacherDegree ?>" disabled>
					</div>
				</div>
				<div class='sub-label'>
				<div class='labelinput'>
						<div>Avatar</div>
					</div>
					<?php
						foreach ($images as $image) {
							if (basename($image) == $teacherAvatar) {
								echo "<img src='$image'/> ";
							}
						}
					?>
				</div>
				<div class='sub-label'>
				<div class='labelinput'>
						<div>Mô tả thêm</div>
					</div>
					<div class='labelinput labelinput-description'>
						<textarea name="teacherDescription" rows="8" cols="80" maxlength="1000" disabled><?php echo $teacherDescription ?></textarea>
					</div>
				</div>
				<div>
					<button type="button" name="button-edit" onclick="history.back()">
						Sửa lại
					</button>
					<button type="submit" name="button-regist">
						Đăng ký
					</button>
				</div>
				</div>
			</div>
		</form>
	</div>

</body>

</html>
