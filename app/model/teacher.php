<!-- Chứa các lệnh SQL -->
<?php
    require '../common/db.php';
    $result = $connect->query("SELECT * FROM teachers WHERE id='2'");
        $result->execute();
?>
