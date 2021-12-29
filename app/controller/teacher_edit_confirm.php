<?php
	require '../model/teacher.php';
	$teacherName = $_GET['teacherName'];
	$teacherSpecialized = $_GET['teacherSpecialized'];
	$teacherDegree = $_GET['teacherDegree'];
	$teacherAvatar = $_GET['teacherAvatar'];
	$teacherDescription = $_GET['teacherDescription'];
	
?>

<?php
$updated = date("Y-m-d h:i:s");

if(isset($_POST['submit_btn_2'])){
	test($teacherName, $teacherSpecialized, $teacherDegree, $teacherAvatar, $teacherDescription, $updated);
	header("Location:../view/teacher_edit_complete.php");
}

$dirname = "../../web/avatar/";
$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);

?>