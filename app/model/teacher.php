<?php
    require '../common/db.php';

    function getID($id) {
        global $conn;
        $edit = $conn->prepare("SELECT * FROM teachers WHERE id=$id");
        $edit->execute();
        return $edit;
    }

    function edit($name, $specialized, $degree, $avatar, $description, $updated, $id){
        global $conn;
        if($name != "" && $specialized != "" && $degree != "" && $avatar != "" && $description != ""){
            $success = $conn->query("UPDATE teachers SET name='$name', specialized='$specialized', degree='$degree', avatar='$avatar', description='$description', updated='$updated' WHERE id=$id");
            $success->execute();
        }    
    };
    

    
?>
