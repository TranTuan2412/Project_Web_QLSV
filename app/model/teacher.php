<?php
    require '../common/db.php';
    $teachers = $conn->query("SELECT * FROM `teachers` order by id");
	$teachers->execute();
?>