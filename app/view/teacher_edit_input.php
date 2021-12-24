<?php
	require '../common/define.php';
	require '../controller/teacher_edit.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sửa thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/css/teacher_edit_input.css">
</head>

<body>

	<div class='container body'>
		<form name='formEdit' action='teacher_edit_input.php' method="POST" id="editform">
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherName" id="idName" value="<?php echo $teacherName; ?>">
						<span class="error" id="nameError"><?php echo $errors['teacherName']; ?></span>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
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
				<div class='sublabel'>
					<div class='label-input'>
						<div>Bằng cấp</div>
					</div>
					<div class='label-input'>
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
				<div class='sublabel'>
					<div class='label-input'>
						<div>Avatar</div>
					</div>
					<div class='label-input'>
						<input name='avatar'>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Mô tả thêm</div>
					</div>
					<div class='label-input-description'>
						<input name="teacherDescription" id="idDescription" value="<?php echo $teacherDescription ?>">
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