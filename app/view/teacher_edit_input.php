<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sửa thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/css/teacher_edit_input.css">
</head>

<body>

	<?php

	$listSpecialized = [
		'001' => 'Khoa Học Máy Tính',
		'002' => 'Khoa Học Dữ Liệu',
		'003' => 'Hải Dương Học',
	];

	$listDegree = [
		'001' => 'Cử nhân',
		'002' => 'Thạc sĩ',
		'003' => 'Tiến sĩ',
		'004' => 'Phó giáo sư',
		'005' => 'Giáo sư',
	];

	include '../common/db.php';
	$result = $conn->prepare("SELECT * FROM teacher WHERE id='2'");
	$result->execute();

	$teacherName = $teacherSpecialized = $teacherDegree = $teacherDescription = '';
	foreach ($result as $row) {
		$teacherSpecialized = $row['specialized'];
		$teacherDegree = $row['degree'];
		$teacherName = $row['name'];
		$teacherDescription = $row['description'];
	}

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
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
						<select name='teacherSpecialized' id='idSpecialized'>

							<option><?php
									foreach ($listSpecialized as $key => $specialized) {
										if ($teacherSpecialized == $key) {
											echo $specialized;
										}
									}

									?></option>

							<?php foreach ($listSpecialized as $key => $specialized) : ?>
								<option>

									<?php echo $specialized; ?>

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

							<option><?php
									foreach ($listDegree as $key => $degree) {
										if ($teacherDegree == $key) {
											echo $degree;
										}
									}

									?></option>

							<?php foreach ($listDegree as $key => $degree) : ?>

								<option value='<?php echo $teacherDegree ?>'>

									<?php echo $degree ?>

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
						<!-- <button type="submit" name="submit">Browse</button> -->
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Mô tả thêm</div>
					</div>
					<div class='label-input-description'>
						<input name="description" value="<?php echo $teacherDescription ?>">
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