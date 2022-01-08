<?php
	require '../model/teacher.php';
	$id = $_GET['id'];
	$teacherName = $_GET['teacherName'];
	$teacherSpecialized = $_GET['teacherSpecialized'];
	$teacherDegree = $_GET['teacherDegree'];
	$teacherAvatar = $_GET['teacherAvatar'];
	$teacherDescription = $_GET['teacherDescription'];
	
?>

<?php
$updated = date("Y-m-d h:i:s");

if(isset($_POST['submit_btn_2'])){
	edit($teacherName, $teacherSpecialized, $teacherDegree, $teacherAvatar, $teacherDescription, $updated, $id);
	deleteImgTmp($teacherAvatar, $id);
	header("Location:../view/teacher_edit_complete.php");
}

if (file_exists("../../web/avatar/tmp/".$teacherAvatar)) {
	$dirname = "../../web/avatar/tmp/";
	$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
} else {
	$dirname = "../../web/avatar/";
	$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
}

function deleteImgTmp($avatar, $id){
	$dirname = "../../web/avatar/teacher/$id/";
	$images = glob($dirname . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
	foreach ($images as $image) {
		unlink($image);
	}
	$file="../../web/avatar/tmp/$avatar";
	$newfile="../../web/avatar/teacher/$id/$avatar";
	copy($file, $newfile);
	unlink("../../web/avatar/tmp/".$avatar);
} 

?>