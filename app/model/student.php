<?php
    require "../common/db.php";
    function getData($id){
        global $conn;
        $qr = "SELECT * FROM students where id=$id";
        $result = $conn->prepare($qr);
        $result->execute();
        // $reponse = $conn->query($qr);
        // $result = $reponse->fetch_assoc();
        return $result;
    }
    function updateData($id,$name,$description,$avatar){
        global $conn;
        $qr = "UPDATE students SET name='$name', avatar='$avatar', description='$description', updated= now() WHERE id=$id";
        $result = $conn->query($qr);
        $result->execute();
        // $conn->query($qr);
    }
?>