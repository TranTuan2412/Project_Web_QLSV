<?php
require "../common/db.php";
$qr = "SELECT name,avatar,description from students where id=".$idStudent."";
$result = $conn->query($qr);
?>