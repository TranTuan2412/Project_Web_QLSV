<?php 


function select_All_Admin(){
    require_once './app/common/db.php';
        
        $sql = "SELECT * FROM admins";
        $data = $conn -> prepare($sql);
        $data -> execute();
        return $data;        
    }



    
?>


