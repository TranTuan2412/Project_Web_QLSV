<?php
require "../common/db.php";
$qr = "SELECT name,avatar,description from students where id=2";
$result = $conn->query($qr);
?>