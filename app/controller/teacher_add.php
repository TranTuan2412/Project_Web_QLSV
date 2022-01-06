<?php
	require '../model/teacher.php';
	$teacherName = $teacherSpecialized = $teacherDegree = $teacherAvatar = $teacherDescription = '';
	$errors = array('teacherName' => '', 'teacherSpecialized' => '', 'teacherDegree' => '', 'teacherAvatar' => '', 'teacherDescription' => '');

	if (isset($_POST['submit'])) {

		if (empty($_POST['teacherName'])) {
			$errors['teacherName'] = 'Hãy nhập tên giáo viên <br />';
			$teacherName = "";
		} else {
			$teacherName = $_POST['teacherName'];
		}

		if (empty($_POST['teacherSpecialized'])) {
			$errors['teacherSpecialized'] = 'Hãy chọn bộ môn <br />';
		} else {
			$teacherSpecialized = $_POST['teacherSpecialized'];
		}

		if (empty($_POST['teacherDegree'])) {
			$errors['teacherDegree'] = 'Hãy chọn bằng cấp <br />';
		} else {
			$teacherDegree = $_POST['teacherDegree'];
		}

		if (empty($_POST['teacherAvatar'])) {
			$errors['teacherAvatar'] = 'Hãy chọn Avatar <br />';
		} else{
			$teacherAvatar = $_POST['teacherAvatar'];
			move_uploaded_file($_FILES['teacherAvatar']['tmp_name'], '../../web/image/'.$teacherAvatar);
		}

		if (empty($_POST['teacherDescription'])) {
			$errors['teacherDescription'] = 'Hãy nhập mô tả chi tiết <br />';
			$teacherDescription = "";
		} else {
			$teacherDescription = $_POST['teacherDescription'];
		}
		$filepath = "../../web/avatar/tmp/" . $_FILES["file"]["name"];
		if (array_filter($errors)) {
			// echo "Errors";
		} else {
			header("Location: teacher_add_confirm.php?teacherName=$teacherName&teacherSpecialized=$teacherSpecialized&teacherDegree=$teacherDegree&teacherAvatar=$teacherAvatar&teacherDescription=$teacherDescription");

			if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
				echo "DONE !!";
			} else {
				echo "Error !!";
			}
		}
	}

?>
