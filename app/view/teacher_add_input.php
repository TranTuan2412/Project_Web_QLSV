<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Đăng ký thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/teacher_add_input.css">
</head>

<body>

	<?php
	require '../common/define.php';
	require '../controller/teacher_add.php';
	?>

	<div class='container body'>
		<form name='formAdd' action='teacher_add_input.php' method="POST" id="addform" enctype="multipart/form-data">
			<div class='text-position'>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Họ và tên</div>
					</div>
					<div class='labelinput'>
						<input type="text" name="teacherName" id="idName" maxlength="100" value="<?php echo $teacherName; ?>">
						<span class="error" id="nameError"><?php echo $errors['teacherName']; ?></span>
					</div>
				</div>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Chuyên ngành</div>
					</div>
					<div class='labelinput'>
						<select name='teacherSpecialized' id='idSpecialized'>
							<option></option>
							<?php foreach ($listSpecialized as $key => $specialized) : ?>
								<option>
									<?php echo $specialized; ?>
								</option>
							<?php endforeach; ?>
						</select>
						<span class="error" id="specializedError"><?php echo $errors['teacherSpecialized']; ?></span>
					</div>
				</div>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Bằng cấp</div>
					</div>
					<div class='labelinput'>
						<select name='teacherDegree' id='idDegree'>
							<option></option>
							<?php foreach ($listDegree as $key => $degree) : ?>
								<option>
									<?php echo $degree ?>
								</option>
							<?php endforeach; ?>
						</select>
						<span class="error" id="degreeError"><?php echo $errors['teacherDegree']; ?></span>
					</div>
				</div>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Avatar</div>
					</div>
					<div class='labelinput'>
						<input><input type="file" name="avatar" id="avatar">
							<span class="error" id="avatarError"><?php echo $errors['teacherAvatar']; ?></span>
					</div>
				</div>
				<div class='sub-label'>
					<div class='labelinput'>
						<div>Mô tả thêm</div>
					</div>
					<div class='labelinput labelinput-description'>
						<textarea name="teacherDescription" id="idDescription" rows="8" cols="80" maxlength="1000" value="<?php echo $teacherDescription ?>"></textarea>
						<span class="error" id="descriptionError"><?php echo $errors['teacherDescription']; ?></span>
					</div>
				</div>
				<div>
					<button type="submit" name="submit">Xác nhận</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
