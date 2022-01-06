<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Xác nhận thông tin giáo viên</title>
	<link rel="stylesheet" href="../../web/teacher_add_confirm.css">
</head>
<body>
	<?php
		$teacherName = $_GET['teacherName'];
		$teacherSpecialized = $_GET['teacherSpecialized'];
		$teacherDegree = $_GET['teacherDegree'];
		$teacherAvatar = $_GET['teacherAvatar'];
		$teacherDescription = $_GET['teacherDescription'];
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
					<div class='labelinput'>
						<img src="'../../web/image/' <?php echo $teacherAvatar?>" alt="logo"/>
					</div>
				</div>
				<div class='sub-label'>
				<div class='labelinput'>
						<div>Mô tả thêm</div>
					</div>
					<div class='labelinput-description'>
						<input name="teacherDescription" value="<?php echo $teacherDescription ?>" disabled>
					</div>
				</div>
				<div>
					<button type="submit" name="button-edit">
						Sửa lại
						<?php
							if(isset($_POST['button-edit'])) {
								header('location:teacher_add_input.php');
								exit();
							 }
						?>
					</button>
					<button type="submit" name="button-regist">
						Đăng ký
						<?php
							require '../model/teacher.php';
							$teacherName = $_GET['teacherName'];
							$teacherSpecialized = $_GET['teacherSpecialized'];
							$teacherDegree = $_GET['teacherDegree'];
							$teacherAvatar = $_GET['teacherAvatar'];
							$teacherDescription = $_GET['teacherDescription'];
							if(isset($_POST['button-regist'])) {
								$sql = "INSERT INTO `teachers` (`name`,`avatar`,`description`, `specialized`, `degree`) VALUES ('$teacherName', '$teacherAvatar', '$teacherDescription','$teacherSpecialized','$teacherDegree')";
        						$connect->exec($sql);
								header('location:teacher_add_complete.php');
								exit();
							 }
						?>
					</button>
				</div>
				</div>
			</div>
		</form>
	</div>

</body>

</html>
