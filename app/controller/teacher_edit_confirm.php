<?php

	$teacherName = $_GET['teacherName'];
	$teacherSpecialized = $_GET['teacherSpecialized'];
	$teacherDegree = $_GET['teacherDegree'];
	$teacherAvatar = $_GET['teacherAvatar'];
	$teacherDescription = $_GET['teacherDescription'];
?>

<?php

$dirname = "../../web/avatar/";
$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);

?>