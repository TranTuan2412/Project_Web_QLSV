<?php
<<<<<<< HEAD
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
=======
	require '../common/db.php';
	$connectSqlStudent = 'SELECT * FROM `students`';
    $listStudents = $conn ->query($connectSqlStudent);
    $listStudents -> execute();
    
    function deleteStudent($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM students WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchStudent($keyword) {
        global $conn;
        if($keyword != "") {
            $query = $conn->prepare("SELECT * FROM `students` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' ");
            $query->execute();
        }else {
            $sqlRoom = 'SELECT * FROM `students`';
            $query = $conn ->prepare($sqlRoom);
            $query->execute();

        }
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
    function add_student($name,$avatar,$des) {
        global $conn;
        $created = date("Y-m-d h:i:s");
        $sql = "INSERT INTO `students` (`name`,`avatar`, `description`, `created`) VALUES ('$name','$avatar','$des','$created')";
        $conn->exec($sql);
    } 
>>>>>>> origin/add-edit-student
?>