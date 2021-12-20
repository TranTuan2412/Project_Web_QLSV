<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sửa thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/css/teacher_edit.css">
</head>

<body>

	<?php
	$listGender = [
		'Nam',
		'Nữ',
	];

	$listDepartment = [
		'Khoa Học Máy Tính',
		'Khoa Học Vật Liệu',
	];

	$listDegree = [
		'Tiến sĩ',
		'Thạc sĩ',
	];

	?>
	<div class='container body'>
		<form name='formSignUp' action='regist.php' method="POST">
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="name_student" value="">
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
						<select name='department' id='idDepartment'>
							<option></option>


							<?php for ($department = 0; $department < count($listDepartment); $department++) : ?>

								<option>

									<?php echo $listDepartment[$department] ?>

								</option>

							<?php endfor; ?>


						</select>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Bằng cấp</div>
					</div>
					<div class='label-input'>
						<select name='degree' id='idDegree'>
							<option></option>


							<?php for ($degree = 0; $degree < count($listDegree); $degree++) : ?>

								<option>

									<?php echo $listDegree[$degree] ?>

								</option>

							<?php endfor; ?>


						</select>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Avatar</div>
					</div>
					<div class='label-input'>
						<input name='year_student'>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Mô tả thêm</div>
					</div>
					<div class='label-input-description'>
						<input name='year_student'>
					</div>
				</div>
				<div>
					<button type="submit" name="submit">Đăng ký</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>