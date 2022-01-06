<?php
	require '../model/teacher.php';
	$teacherName = $teacherSpecialized = $teacherDegree = $teacherAvatar = $teacherDescription = '';
	$errors = array('teacherName' => '', 'teacherSpecialized' => '', 'teacherDegree' => '', 'teacherAvatar' => '', 'teacherDescription' => '');

	foreach ($result as $row) {
		$teacherName = $row['name'];
		$teacherSpecialized = $row['specialized'];
		$teacherDegree = $row['degree'];
		$teacherAvatar = $row['avatar'];
		$teacherDescription = $row['description'];
	}

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

		if (empty($_FILES['avatar']['name'])) {
			$errors['teacherAvatar'] = 'Hãy chọn Avatar <br />';
		} else{
			$teacherAvatar = $_FILES['avatar']['name'];
			move_uploaded_file($_FILES['avatar']['tmp_name'], '../../web/image/'.$teacherAvatar);
		}

		if (empty($_POST['teacherDescription'])) {
			$errors['teacherDescription'] = 'Hãy nhập mô tả chi tiết <br />';
			$teacherDescription = "";
		} else {
			$teacherDescription = $_POST['teacherDescription'];
		}

		if (array_filter($errors)) {
			// echo "Errors";
		} else {
			header("Location: teacher_add_confirm.php?teacherName=$teacherName&teacherSpecialized=$teacherSpecialized&teacherDegree=$teacherDegree&teacherAvatar=$teacherAvatar&teacherDescription=$teacherDescription");
		}
	}

?>
