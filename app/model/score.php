<?php
    require_once '../common/db.php';

    function getAllScore(){
        global $conn;
        $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id order by scores.id desc");
        $query->execute();
        $scores = $query->fetchAll();
        return $scores;
    }

    function searchScore($name,$subject,$teacher){
        global $conn;
        if($name !=='' && $subject !=='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && subjects.name LIKE '%$subject%' && teachers.name LIKE '%$teacher%' order by scores.id desc");
            $query->execute();
        } else if($name !=='' && $subject !=='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && subjects.name LIKE '%$subject%' order by scores.id desc");
            $query->execute();
        } else if($name !=='' && $subject ==='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' && teachers.name LIKE '%$teacher%' order by scores.id desc");
            $query->execute();
        } else if($name ==='' && $subject !=='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && subjects.name LIKE '%$subject%' && teachers.name LIKE '%$teacher%' order by scores.id desc");
            $query->execute();
        } else if($name !=='' && $subject ==='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && students.name LIKE '%$name%' order by scores.id desc");
            $query->execute();
        } else if($name ==='' && $subject !=='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && subjects.name LIKE '%$subject%' order by scores.id desc");
            $query->execute();
        } else if($name ==='' && $subject ==='' && $teacher !==''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id && teachers.name LIKE '%$teacher%' order by scores.id desc");
            $query->execute();
        } else if($name ==='' && $subject ==='' && $teacher ===''){
            $query = $conn->query("SELECT scores.id,students.name as sinh_vien,subjects.name as mon_hoc,teachers.name as giao_vien,scores.score FROM scores,students,subjects,teachers WHERE scores.student_id=students.id && subjects.id=scores.subject_id && scores.teacher_id = teachers.id order by scores.id desc");
            $query->execute();
        }
        $data=$query->fetchAll();
        return $data;
    }

    function deleteScore($id){
        global $conn;
        $query = $conn->query("DELETE FROM scores where id=" . $id);
        $query->execute();
        return 1;
    }
?>