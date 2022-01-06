<!-- Chứa các lệnh SQL -->
<?php
    require '../common/db.php';

    function insertTeacher($name, $specialized, $degree, $avatar, $description){
        global $conn;
        $created =  date("Y-m-d h:i:s");
        if($name != "" && $specialized != "" && $degree != "" && $avatar != "" && $description != ""){
            $sql = "INSERT INTO `teachers` (`name`,`avatar`,`description`, `specialized`, `degree`, `created`) VALUES ('$name', '$avatar', '$description','$specialized','$degree', '$created')";
            $conn->exec($sql);
        }
    };
    function getId(){
        global $conn;
        $sql = "SELECT MAX(id) as max_id FROM `teachers`";
        $id = $conn -> query($sql);
        $id -> execute();
        $invNum = $id -> fetch(PDO::FETCH_ASSOC);
        return $invNum['max_id'];
    }
?>
