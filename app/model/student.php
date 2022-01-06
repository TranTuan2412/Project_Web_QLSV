<?php
require "../common/db.php";
$qr = "SELECT name,avatar,description from students where id=".$idStudent."";
foreach($conn->query($qr) as $row){
    $nameStudent = $row['name'];
    $avatarStudent = $row['avatar'];
    $descriptionStudent = $row['description'];
}

?>