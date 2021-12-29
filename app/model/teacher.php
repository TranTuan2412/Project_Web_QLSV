<?php
    require '../common/db.php';

    $result = $conn->query("SELECT * FROM teacher WHERE id='1'");
	$result->execute();

    function test($name, $specialized, $degree, $avatar, $description, $updated){
        require '../common/db.php';
        if($name != "" && $specialized != "" && $degree != "" && $avatar != "" && $description != ""){
            $success = $conn->query("UPDATE teacher SET name='$name', specialized='$specialized', degree='$degree', avatar='$avatar', description='$description', updated='$updated' WHERE id='1'");
            $success->execute();
        }
        
    };
    

    
?>
