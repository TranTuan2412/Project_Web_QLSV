<?php
    require '../common/db.php';
    $result = $conn->query("SELECT * FROM teacher order by id'");
	$result->execute();
?>