<?php
	require '../model/teacher.php';
	$teacherName = $teacherSpecialized = $teacherDegree = $teacherDescription = '';
	$errors = array('teacherName' => '', 'teacherSpecialized' => '', 'teacherDegree' => '', 'teacherDescription' => '');

	foreach ($result as $row) {
		$teacherSpecialized = $row['specialized'];
		$teacherDegree = $row['degree'];
		$teacherName = $row['name'];
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

		if (empty($_POST['teacherDescription'])) {
			$errors['teacherDescription'] = 'Hãy nhập mô tả chi tiết <br />';
			$teacherDescription = "";
		} else {
			$teacherDescription = $_POST['teacherDescription'];
		}

		if (array_filter($errors)) {
			// echo "Errors";
		} else {
			header("Location: teacher_edit_confirm.php?teacherName=$teacherName&teacherSpecialized=$teacherSpecialized&teacherDegree=$teacherDegree&teacherDescription=$teacherDescription");
		}
	}

?>