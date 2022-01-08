<?php
    require_once '../common/db.php';

    function getAllScore(){
        global $conn;
        $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id");
        $query->execute();
        $scores = $query->fetchAll();
        return $scores;
    }

    function searchScore($name,$subject,$teacher){
        global $conn;
        if($name !=='' && $subject !=='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && subjects.name LIKE '%$subject%' && teachers.name LIKE '%$teacher%'");
            $query->execute();
        } else if($name !=='' && $subject !=='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && subjects.name LIKE '%$subject%'");
            $query->execute();
        } else if($name !=='' && $subject ==='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && teachers.name LIKE '%$teacher%'");
            $query->execute();
        } else if($name ==='' && $subject !=='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && subjects.name LIKE '%$subject%' && teachers.name LIKE '%$teacher%'");
            $query->execute();
        } else if($name !=='' && $subject ==='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%'");
            $query->execute();
        } else if($name ==='' && $subject !=='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && subjects.name LIKE '%$subject%'");
            $query->execute();
        } else if($name ==='' && $subject ==='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && teachers.name LIKE '%$teacher%'");
            $query->execute();
        } else if($name ==='' && $subject ==='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id");
            $query->execute();
        }
        $data=$query->fetchAll();
        return $data;
    }

    function deleteScore($id){
        global $connect;
        $query = $connect->query("DELETE FROM scores where id=" . $id);
        $query->execute();
        return 1;
    }
?>