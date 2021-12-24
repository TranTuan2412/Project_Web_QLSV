<?php
    require '../common/db.php';
    $result = $conn->query("SELECT * FROM teacher WHERE id='2'");
	$result->execute();
?>