<?php
require '../controller/teacher_edit_confirm.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Xác nhận tin giáo viên</title>
	<link rel="stylesheet" href="../../web/css/teacher_edit_confirm.css">
</head>

<body>
	<div class='container body'>
		<form name='formConfirm' method="POST" id="formConfirm">
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherName" value="<?php echo $teacherName ?>" disabled>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherSpecialized" value="<?php echo $teacherSpecialized ?>" disabled>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Bằng cấp</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherDegree" value="<?php echo $teacherDegree ?>" disabled>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
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
				<div class='sublabel'>
					<div class='label-input'>
						<div>Mô tả thêm</div>
					</div>
					<div class='label-input-description'>
						<textarea name="teacherDescription" rows="9" cols="70" maxlength="1000" disabled>
							<?php echo $teacherDescription ?>
						</textarea>
					</div>
				</div>
				<div>
					<button type="submit" name="submit_btn_1" id="submit_btn_1" formaction="teacher_edit_input.php">Sửa lại</button>
					<button type="submit" name="submit_btn_2" id="submit_btn_2">Lưu</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>