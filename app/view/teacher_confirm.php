<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sửa thông tin giáo viên</title>
    <link rel="stylesheet" href="../../web/css/teacher_confirm.css">
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
		<form name='formSignUp' action='regist.php' method="POST" >
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="name_teacher" value="Nguyễn Văn A" disabled>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Chuyên ngành</div>
					</div>
					<div class='label-input'>
						<input type="text" name="department" value="Lập trình web" disabled>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Bằng cấp</div>
					</div>
					<div class='label-input'>
						<input type="text" name="degree" value="Tiến sĩ" disabled>
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
						<input name='description' value="RRRRRRRRRRRRR" disabled>
					</div>
				</div>
				<div>
					<button type="submit" name="submit">Sửa lại</button>
					<button type="submit" name="submit">Lưu</button>
				</div>
			</div>
		</form>
	</div>
	
</body>

</html>