<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sửa thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/css/teacher_edit.css">
</head>

<body>
	<?php
	include '../common/db.php';
	?>

	<?php

		$listDepartment = [
			'Khoa Học Máy Tính',
			'Khoa Học Vật Liệu',
		];

		$listDegree = [
			'Tiến sĩ',
			'Thạc sĩ',
		];

	?>

	<?php
		$teacherName = $_POST['name'];
		$teacherSpecialized = $_POST['specialized'];
		$teacherDegree = $_POST['degree'];
		$teacherDescription = $_POST['description'];
	?>

	<div class='container body'>
		<form name='formEdit' action='teacher_confirm.php' method="POST">
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherName" value="<?php echo $teacherName ?>">
						<?php
						echo $teacherName
						?>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
						<select name='teacherSpecialized' id='idSpecialized'>

							<?php foreach ($listSpecialized as $specialized) : ?>

								<option value='<?php echo $specialized['value'] ?>'>

									<?php echo $specialized['name'] ?>

								</option>

							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Bằng cấp</div>
					</div>
					<div class='label-input'>
						<select name='teacherDegree' id='idDegree'>

							<?php foreach ($listDegree as $degree) : ?>

								<option value='<?php echo $degree['value'] ?>'>

									<?php echo $degree['name'] ?>

								</option>

							<?php endforeach; ?>
						</select>
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
						<input name="description" value="<?php echo $teacherDescription ?>">
						<?php
							echo $teacherDescription
						?>
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