<?php
require '../model/teacher.php';
session_start();
$id = $teacherName = $teacherSpecialized = $teacherDegree = $teacherAvatar = $teacherDescription = '';
$errors = array('teacherName' => '', 'teacherSpecialized' => '', 'teacherDegree' => '', 'teacherAvatar' => '', 'teacherDescription' => '');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$_SESSION["id"] = $_GET['id'];
	if ($id != "") {
		$edit = getID($id);
	};
	foreach ($edit as $row) {
		$teacherSpecialized = $row['specialized'];
		$teacherDegree = $row['degree'];
		$teacherName = $row['name'];
		$teacherAvatar = $row['avatar'];
		$teacherDescription = $row['description'];
	}
}

$id = $_SESSION["id"];

if (isset($_POST['submit'])) {

	if (empty($_POST['teacherName'])) {
		$errors['teacherName'] = 'Hãy nhập tên giáo viên <br />';
		$teacherName = "";
	} else if (strlen($teacherName) > 100) {
		$errors['teacherName'] = 'Không nhập quá 100 ký tự <br />';
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
		$errors['teacherAvatar'] = 'Hãy chọn avatar <br />';
		$teacherAvatar = "";
	} else if (!preg_match("/\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/", $_POST['teacherAvatar'])) {
		$errors['teacherAvatar'] = 'Đây không là file ảnh <br />';
		$teacherAvatar = "";
	} else {
		$teacherAvatar = $_POST['teacherAvatar'];
	}

	if (trim($_POST['teacherDescription']) == "") {
		$errors['teacherDescription'] = 'Hãy nhập mô tả chi tiết <br />';
		$teacherDescription = "";
	} else if (strlen($teacherDescription) > 1000) {
		$errors['teacherDescription'] = 'Không nhập quá 1000 ký tự <br />';
	} else {
		$teacherDescription = $_POST['teacherDescription'];
	}

	$filepath = "../../web/avatar/tmp/" . $_FILES["file"]["name"];

	if (array_filter($errors)) {
		$teacherAvatar = "";
	} else {
		header("Location: teacher_edit_confirm.php?id=$id&teacherName=$teacherName&teacherSpecialized=$teacherSpecialized&teacherDegree=$teacherDegree&teacherAvatar=$teacherAvatar&teacherDescription=$teacherDescription");
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
			echo "DONE !!";
		} else {
			echo "Error !!";
		}
	}
}

?>

<?php

$dirname = "../../web/avatar/";
$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);

?>
