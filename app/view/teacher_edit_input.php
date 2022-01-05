<?php
require '../common/define.php';
require '../controller/teacher_edit_input.php';
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
		<form name='formEdit' action='teacher_edit_input.php<?php echo '?id=' . $id; ?>' method="POST" enctype="multipart/form-data">
			<div class='text-position'>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Họ và tên</div>
					</div>
					<div class='label-input'>
						<input type="text" name="teacherName" id="idName" value="<?php echo $teacherName; ?>">
						<span class="error" id="nameError"><?php echo $errors['teacherName']; ?></span>
						<input type="hidden" name="id" value="<?php echo $idr ?>">
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
								<option value="<?php echo $key ?>">

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

								<option value="<?php echo $key ?>">

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
						<?php
						foreach ($images as $image) {
							if (basename($image) == $teacherAvatar) {
								echo "<img src='$image' id='ava'/> ";
							}
						}

						?>
						<input type="file" name="file" id="file" onchange="uploadFile(this)" oninput='pic.src=window.URL.createObjectURL(this.files[0]);' />
						<label for="file">
							<img id="pic" />
							<input type="text" id="file-name" name="teacherAvatar" class="name-avatar" value="<?php echo $teacherAvatar; ?>">
							<span class="custom-file-upload">
								Browse
							</span>
						</label>
						<span class="error" id="avatarError"><?php echo $errors['teacherAvatar']; ?></span>
					</div>
				</div>
				<div class='sublabel'>
					<div class='label-input'>
						<div>Mô tả thêm</div>
					</div>
					<div class='label-input-description'>
						<textarea name="teacherDescription" rows="9" cols="70" maxlength="1000"><?php echo $teacherDescription ?>
						</textarea>
						<span class="error" id="descriptionError"><?php echo $errors['teacherDescription']; ?></span>
					</div>
				</div>
				<div>
					<button type="submit" name="submit">Xác nhận</button>
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="../../web/js/teacher_edit.js"></script>
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>

</body>

</html>